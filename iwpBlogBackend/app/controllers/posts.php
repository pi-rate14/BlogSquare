<?//php error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); ?>
<?php 
    include("../../app/database/db.php"); 
    include("../../app/helpers/validatePost.php"); 

    $table = 'posts';

    $topics = selectAll('topics');
    $posts = selectAll('posts');
    
    $errors = array();

    $id = "";
    $title = "";
    $body = "";
    $topic_id = "";
    $published = "";

    if(isset($_GET['id'])){
        $post = selectOne($table, ['id' => $_GET['id']]);
        $id = $post['id'];
        $title = $post['title'];
        $body = $post['body'];
        $topic_id = $post['topic_id'];
        $published = $post['published'];
    }

    if(isset($_GET['delete_id'])){
        $count = delete($table, $_GET['delete_id']);
        $_SESSION['message'] = "Post deleted successfully";
        $_SESSION['type'] = "error";
        header("location: " . BASE_URL . "/admin/posts/index.php");
        exit();
    }

    if(isset($_POST['add-post'])){
        //dd($_FILES['image']['name']);
        $errors = validatePost($_POST);

        if(!empty($_FILES['image']['name'])){
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = "../../assets/images/" . $image_name;
            $result =  move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result){
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, "Failed to upload image");
            }
        } else{
            array_push($errors, "post image required.");
        }

        if(count($errors)==0){
            unset($_POST['add-post']);
            $_POST['user_id'] = 1;
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    
            $post_id = create($table, $_POST);
            $_SESSION['message'] = "Post created successfully";
            $_SESSION['type'] = "success";
            header("location: " . BASE_URL . "/admin/posts/index.php");
            exit();
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $ppublished = isset($_POST['published']) ? 1 : 0;
        }
        
    }

    if(isset($_POST['update-post'])){
        $errors = validatePost($_POST);
        if(!empty($_FILES['image']['name'])){
            $image_name = time() . '_' . $_FILES['image']['name'];
            $destination = "../../assets/images/" . $image_name;
            $result =  move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result){
                $_POST['image'] = $image_name;
            }else{
                array_push($errors, "Failed to upload image");
            }
        } else{
            array_push($errors, "post image required.");
        }
        if(count($errors)==0){
            $id = $_POST['id'];
            unset($_POST['update-post'], $_POST['id']);
            $_POST['user_id'] = 1;
            $_POST['published'] = isset($_POST['published']) ? 1 : 0;
    
            $post_id = update($table, $id, $_POST);
            $_SESSION['message'] = "Post updated successfully";
            $_SESSION['type'] = "success";
            header("location: " . BASE_URL . "/admin/posts/index.php");
        } else {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $topic_id = $_POST['topic_id'];
            $ppublished = isset($_POST['published']) ? 1 : 0;
        }

    }

