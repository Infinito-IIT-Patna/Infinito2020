var countBox =1;
var boxName = 0;
function addInput()
{
     var boxName="team"+countBox; 
     document.getElementById('members').innerHTML+='<label for="teamMember">Team Member'+countBox+'</label><br/><input name="' + boxName +'" type="text" class="form-control" /><br/>';
     countBox += 1;
}