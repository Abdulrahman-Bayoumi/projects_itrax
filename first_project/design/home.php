<!DOCTYPE html>
    <html>
        <head>
            
        </head>
        <body>
         
           <table border='1'>
              <tr>
                    <th>id </th>
                    <th>img </th>
                   <th>Name</th>
                   <th>Email</th>
                <?php if($userrole ==1): ?>
                   <th>UPdata</th>
                   <th>Delet</th>
                      <?php endif; ?>
              </tr>
              <?php foreach($data as $user):?>
              <tr>
                   <td><?= $user['id'] ?></td>
                   <td><img height="50px" src="userimages/<?= $user['img'] ?>" alt=""></td>
                   <td><?php echo $user['name']?></td>
                   <td><?php echo $user['email']?></td>
                   <?php if($userrole ==1): ?>
                   <td><a href="updatauser.php?id=<?=$user['id'] ?>">updata</a></td>
                   <td><a href="deletuser.php?id=<?=$user['id'] ?>">delet</a></td>
                   <?php endif; ?>
              </tr>
              <?php   endforeach;?>
           </table>
        </body>
    </html>