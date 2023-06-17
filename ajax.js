//Insert
$(".btn")  // Selects all <button> elements on the page using a CSS selector
.click(function(){  // Attaches a click event handler to the selected elements

    var name=$("#name").val();
    var email=$("#email").val();
    var pass=$("#pass").val();



      $.ajax({
        method:"POST",
        url:"insert.php",
        data:{name:name,email:email,pass:pass},
        success:function(data){
            read() //read er sob data dekhte chacchi tai read call kora..
        }
      })
});

//read
function read(){
    var read="";
    $.ajax({
        url:"read.php",
        method:"POST",
        data:{read:read},
        success:function(data){
            $("#tbody").html(data);
        }
    });
}
//delete
function Delete(user_id){
    $con=confirm("Are you sure want to delete the Data?");
    if($con==true){
        $.ajax({
            url:"delete.php",
            method:"POST",
            data:{user_id:user_id},
            success:function(){
                read()
            }
        });
    }
}
//Update

function Edit(user_id){
    

        $.ajax({
            url:"edit.php",
            method:"GET",
            data:{user_id:user_id},
            success:function(data){
                $("body").html(data)
            }
        });
}
function UPDATE_DATA(user_id){
    var name=$("#name").val();
    var email=$("#email").val();
    var pass=$("#pass").val();
    $.ajax({
        url:"update.php",
        method:"GET",
        data:{name:name,email:email,pass:pass,user_id:user_id},
        success:function(data){
            alert(data);
        }
    });
}

$(".read").click(function(){
    var read="";
    $.ajax({
        url:"read.php",
        method:"POST",
        data:{read:read},
        success:function(data){
            $("#tbody").html(data);
        }
    });
});

function home(){
    var read="";
    $.ajax({
        url:"index.php",
        method:"POST",
        data:{read:read},
        success:function(data){
            $("body").html(data);
        }
    });
}
