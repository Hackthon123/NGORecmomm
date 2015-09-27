<?php include("header.php"); ?>
    
   <div class="neighborhood-guides">
  <div class="container">
    <h2>Our Recommendations</h2>
    		<?php
                  echo "<p>We Recommend this project for you:</h4><p />";
                  echo "<hr style=\"border: 1px solid #06C\" />";
                 $query = "SELECT project.*, skills.*, interests.* FROM project INNER JOIN skills ON skills.projectID = project.projectID INNER JOIN skilltypes ON skills.skilsTypeID = skilltypes.SkillTypeID WHERE skilltypes.SkillTypeID LIKE '%" . $project2['SkillID'] . "%' AND Rating != 0 ORDER BY RAND() LIMIT 0,7";
               $recommendations = mysql_query($query);
                           if (!$recommendations) {
    echo mysql_error();
}
                  if (mysql_num_rows($recommendations) > 0) {
                      echo "<table align=\"center\"><tr>";
                      while ($recommendation = mysql_fetch_array($recommendations)) {
                          echo "<td><a href=\"moviedetails.php?id=" . $recommendation['projectID'] . "\">" . '<img src="Images/project/' . $recommendation['Filename'] . '" width="125" height="185" />' . "</a></td>";
                      }
                      echo "</tr></table>";
                  }
                  echo "</div>";
              }
?>

   			
	  </div>
	</div>
    
  <?php include("footer.php"); ?>