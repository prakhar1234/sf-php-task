<?php
ob_start();
session_start();
require_once 'dbconnect.php';


// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
}
// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Welcome - <?php echo $userRow['userEmail']; ?></title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"  />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#FormSubmit").click(function (e) {
                e.preventDefault();
                if($("#contentText").val()==='')
                {
                    alert("Please enter some text!");
                    return false;
                }

                $("#FormSubmit").hide(); //hide submit button
                $("#LoadingImage").show(); //show loading image

                var myData = 'content_txt='+ $("#contentText").val();
                jQuery.ajax({
                    type: "POST",
                    url: "response.php",
                    dataType:"text",
                    data:myData,
                    success:function(response){
                        $("#responds").append(response);
                        $("#contentText").val('');
                        $("#FormSubmit").show();
                        $("#LoadingImage").hide();

                    },
                    error:function (xhr, ajaxOptions, thrownError){
                        $("#FormSubmit").show();
                        $("#LoadingImage").hide();
                        alert(thrownError);
                    }
                });
            });

            //##### Send delete Ajax request to response.php #########
            $("body").on("click", "#responds .del_button", function(e) {
                e.preventDefault();
                var clickedID = this.id.split('-');
                var DbNumberID = clickedID[1];
                var myData = 'recordToDelete='+ DbNumberID;

                $('#item_'+DbNumberID).addClass( "sel" );
                $(this).hide();

                jQuery.ajax({
                    type: "POST",
                    url: "response.php",
                    dataType:"text",
                    data:myData,
                    success:function(response){

                        $('#item_'+DbNumberID).fadeOut();
                    },
                    error:function (xhr, ajaxOptions, thrownError){

                        alert(thrownError);
                    }
                });
            });

        });
    </script>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>


<div class="content_wrapper">
    <ul id="responds">
        <?php
        //include db configuration file
        include_once("config.php");
        $add_delete="add_delete";
        //MySQL query
        $results = $mysqli->query("SELECT id,content,emailid FROM ".$add_delete."");
        //get all records from add_delete_record table
        while($row = $results->fetch_assoc())
        {

            if($row["emailid"]==$userRow['userEmail'])
            {
            echo '<li id="item_'.$row["id"].'" class="bg-success">';
            echo '<div class="del_wrapper bg-success"><a href="#" class="del_button" id="del-'.$row["id"].'">';
            echo '<img src="images/icon_del.gif" border="0" />';
            echo '</a></div>';
            echo $row["content"].'</li>';}
        }

        //close db connection
        $mysqli->close();
        ?>
    </ul>
    <div class="form_style">
        <textarea name="content_txt" id="contentText" cols="45" rows="5" placeholder="Enter some text"></textarea>
        <button id="FormSubmit">Add NOTES</button>
        <img src="images/loading.gif" id="LoadingImage" style="display:none" />
    </div>
</div>
<a href="Logout.php?logout=+a" class="btn btn-default" >logout</a>


</body>
</html>
<?php ob_end_flush(); ?>
