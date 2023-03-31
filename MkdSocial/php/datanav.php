<?php
   
   while($row = mysqli_fetch_assoc($query)){


        $output .= '<a  href="profileuser.php?user_id='. $row['unique_id'] .'" id="notifications" style="padding-bottom: 8px;padding-top: 8px; padding-left: 6px;">
                    <div class="profile-details">
                       <img src="php/images/' .$row['img'] .'" alt="">
                       <div class="name_job" style="color: white;">
                       <span class="links_name"><div class="name" style="font-size: 16px;">'.$row['fname']. " " . $row['lname'] .'</div>
                         <div class="job" style="font-size: 13px;">' .$row['situation']. '</div></span>
                       </div>
                     </div>
                    </a>';
    }
   
?>
<!-- <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li> -->