var countBox =1;
var boxName = 0;
function addInput()
{
     var boxName="team"+countBox; 
document.getElementById('members').innerHTML+='<label for="teamMember">Team Member</label><br/><input name="' + boxName +'" type="text"   /><br/>';
     countBox += 1;
}