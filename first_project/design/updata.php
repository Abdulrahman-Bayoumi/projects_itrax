<!DOCTYPE html>
    <html>
        <head>
            
        </head>
        <body>
            <form action="updatauser.php" method="post"  enctype="multipart/form-data">
           <input type="text" name="name" value="<?php echo $userdata['name']; ?>" placeholder="enter name">
           <input type="text" name="email" value="<?php echo $userdata['email'] ;?>"placeholder="enter email">
           <input type="password" name="password" placeholder="enter password" >
           <input type="hidden" value="<?php echo $userdata['id'] ;?>" name="id" >
          <td><img height="50px" src="userimages/<?= $userdata['img'] ;?>" alt=""></td>
           <input type="file" name="img"  >

            <input type="submit" >
            </form>
        </body>
    </html>