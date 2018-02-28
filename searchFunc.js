<script>

function mySearch()
{
var input = document.getElementById("beer").value;

if (input=="lager" || input=="lagers" || input=="Lager" || input=="Lagers" || input=="budweiser" || input=="Budweiser" || input=="PBR" || input=="pbr" || input=="coors" || input=="Coors" || input=="genessee" || input=="Genessee" || input=="becks" || input=="Becks" || input=="radeberger" || input=="Radeberger" || input=="amstel" || input=="Amstel" || input=="stella artois" || input=="Stella Artois" || input=="harpon dunkel" || input=="Harpon Dunkel" || input=="hofbrow dunkel" || input=="Hofbrow Dunkel" || input=="spaten dunkel" || input=="Spaten Dunkel" || input=="shiner" || input=="Shiner" || input=="anchor bock" || input=="Anchor Bock" || input=="la trappe" || input=="La Trappe" || input=="yuengling bock" || input=="Yuengling Bock" || input=="stella" || input=="Stella" || input=="harpon" || input=="Harpon" || input=="hofbrow" || input=="Hofbrow" || input=="spaten" || input=="Spaten" || input=="trappe" || input=="Trappe" || input=="yuengling" || input=="Yuengling")
    {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/lager.php")
    }

    else if(input == "ales" || input =="ale" || input =="Ale" || input =="Ales" || input =="Sierra Nevada" || input =="sierra nevada" || input =="anchor" || input =="Anchor" || input =="Stone"|| input =="stone" || input =="Dogfish" || input =="dogfish" || input =="dogfish head" || input =="Dogfish" || input =="Dogfish Head" || input =="Hog Heaven" || input =="hog heaven" || input =="hog" || input =="old horizontal" || input =="Old Horizontal" || input =="old" || input =="horizontal" || input =="great lakes" || input =="Great Lakes" || input =="great" || input =="founders" || input =="Founders" || input =="black butte" || input =="Black Butte" || input =="Brasserie Cantillion" || input =="Brasserie" || input =="Cantillon" || input =="Upland" || input =="upland" || input =="Lindemans" || input =="lindemans")
   {
      window.location.assign("http://cis444.cs.csusm.edu/group_B/ale.php")
   }

</script><script>

function mySearch() 
{
    var input = document.getElementById('value').value;
    if (input == 'lager') 
    {
        window.location.assign('http://cis444.cs.csusm.edu/group_B/lager.php');
    }
    else 
    {
        alert("try again");
        document.getElementById('error').innerHTML = "try again";
    }
}


/*
function mySearch() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

if(input == "lager")
{
window.location.assign('http://cis444.cs.csusm.edu/group_B/lager.php');
}
/*
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
*/
</script>
