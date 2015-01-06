<form name= "fruit" action= "decisions trees.php" method="post">
<fieldset>
<legend>Selecteer je fruit</legend>
<select name="kleur">
  <option  value="kleur">kleur</option>
  <option  value="rood">rood</option>
  <option value="groen">groen</option>
  <option value="geel">geel</option>
</select>
<select name="grote">
  <option value="grote">grote</option>
  <option value="groot">groot</option>
  <option value="medium">medium</option>
  <option value="klein">klein</option>
</select >
<select name="smaak">
  <option value="smaak">smaak</option>
  <option value="zuur">zuur</option>
  <option value="zoet">zoet</option>
</select>
<select name="vorm">
  <option value="vorm">vorm</option>
  <option value="rond">rond</option>
  <option value="dun">dun</option>
</select>
</fieldset

<p><input type="submit" name="gem" value="klik" /></p>
 </form>
 
 <?php
 $kleur = $_POST["kleur"];
$grote = $_POST["grote"];
$smaak = $_POST["smaak"];
$vorm = $_POST["vorm"];

if($kleur == 'groen' && $grote == "groot")
echo 'Je fruit is watermeloen';
if($kleur == 'groen' && $grote == "medium")
echo 'Je fruit is groene appel';
if($kleur == 'groen' && $grote == "klein")
echo 'Je fruit is een Druif';
if($kleur == 'geel' && $vorm == "rond" && $grote =="medium")
echo 'Je fruit is grape fruit';
if($kleur == 'geel' && $vorm == "rond" && $grote =="klein")
echo 'Je fruit is citroen';
if($kleur == 'geel' && $vorm == "dun")
echo 'Je fruit is banaan';
if($kleur == 'rood' && $grote == "medium")
echo 'Je fruit is een appel';
if($kleur == 'rood' && $grote == "klein" && $smaak="zoet")
echo 'Je fruit is een kers';
if($kleur == 'rood' && $grote == "klein" && $smaak="zuur")
echo 'Je fruit is een druif';
?>
