<html>

<body>


<form action="push.php" method="POST">





<h1>Sports</h1>

 <select name="type">
    <option value="boys">Boys</option>
    <option value="girls">Girls</option>
  </select>
<br>
<select name="sports">
    <option value="Cricket">Cricket</option>
    <option value="Football">Football</option>
<option value="Volleyball">Volleyball</option>
<option value="Tabletennis">Table Tennis</option>
<option value="Badminton">Badminton</option>
<option value="Kabaddi">Kabaddi</option>
<option value="TugofWar">Tug of War</option>
<option value="Carrom">Carrom</option>
<option value="Athletics">Athletics</option>
<option value="Basketball">Basketballl</option>
<option value="chess">Throwball</option>
<option value="athletics">Box cricket</option>
<option value="basketball">Dodgeball</option>
<option value="chess">Chess</option>
  </select>
<br>
<input type="checkbox" name="teams[]" value="FE_CM"> FE_CM<br>
<input type="checkbox" name="teams[]" value="FE_IT"> FE_IT<br>
<input type="checkbox" name="teams[]" value="FE_EX" >FE_EX <br>
<input type="checkbox" name="teams[]" value="FE_ETC"> FE_ETC<br>
<input type="checkbox" name="teams[]" value="SE_CM"> SE_CM<br>
<input type="checkbox" name="teams[]" value="SE_IT" >SE_IT <br>
<input type="checkbox" name="teams[]" value="SE_EX"> SE_EX<br>
<input type="checkbox" name="teams[]" value="SE_ETC">SE_ETC<br>
<input type="checkbox" name="teams[]" value="TE_CM" >TE_CM <br>
<input type="checkbox" name="teams[]" value="TE_IT">TE_IT <br>
<input type="checkbox" name="teams[]" value="TE_EX">TE_EX <br>
<input type="checkbox" name="teams[]" value="TE_ETC"> TE_ETC<br>
<input type="checkbox" name="teams[]" value="BE_CM"> BE_CM<br>
<input type="checkbox" name="teams[]" value="BE_IT"> BE_IT<br>
<input type="checkbox" name="teams[]" value="BE_EX" > BE_EX<br>
<input type="checkbox" name="teams[]" value="BE_ETC"> BE_ETC<br>
<input type="checkbox" name="teams[]" value="Council">Council<br>
<input type="submit" name="submit">
</form>
</body>
</html>