//(function () {

    /*
     * Constructeur
     */
    //this.myPlugin = function () {

    //}
    //var inputChecked = document.querySelector()
    // if(this.document.getElementsByTagName('input')[0].checked);
    // viser les éléments data-filter
    //var contenu = document.querySelector("[data-filter]");
    //console.log(contenu);
    
//})(); 
window.addEventListener('load', function (){

    this.addEventListener('click', function(e){
        // console.log(e);
        var contenu = e.target.getAttribute("data-filter");
        console.log(contenu);
        var items = document.querySelectorAll('.item');
        var checked = e.target.checked;
        console.log(checked);
        // console.log(contenu);
        // console.log(checked);
        for(item of items){
            // console.log(item);
            // Si la checkbox viens d'être décochée
            var category = 'category:'+ item.dataset.category;
            var year = 'year:' + item.dataset.year;
            // var 

            if(!checked){
                // console.log(category);
                if (category==contenu){
                    // faire display:none sur le li dont category = contenu
                    item.style.display = 'none';
                }
    
            } else { // sinon
                // console.log(category);
                if (category==contenu){
                    // faire display:none sur le li dont category = contenu
                    item.style.display = 'block';
                }
            }
            if (!checked) {
                // console.log(year);
                if (year == contenu) {
                    // faire display:none sur le li dont year = contenu
                    item.style.display = 'none';
                }

            } else { // sinon
                // console.log(year);
                if (year == contenu) {
                    // faire display:none sur le li dont year = contenu
                    item.style.display = 'block';
                }

            }
        }

    })
})
// var id = contenu.id;
