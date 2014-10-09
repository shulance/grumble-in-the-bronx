$(document).ready(function() {
  $.ajaxSetup({ cache: true });
  var api_key = "hnelw0drizuvc65lnpt2g7cg0";
  var api_server = "http://api.bazaarvoice.com/data/";
  var num_items = 10;
  var left = 0;
  $.getJSON(api_server+"authors.json?callback=?", 
   "apiversion=4.9&passkey=" + api_key + "&Stats=Reviews&Sort=TotalReviewCount:Desc&limit=" + num_items,
    function(json){
     
      $.each(json.Results, function(index, author) {
        var authorSingular = "<div id='"+author['Id']+"' class='author' ><p><strong>"+author['DisplayName']+"</strong> "+author['TotalReviewCount']+" reviews</p></div>";

        $("#authors").append(authorSingular);
       
      });
  });
$('body').on( 'click', 'div.author', function () { 

$( "#reviews" ).empty();
  $.getJSON(api_server+"authors.json?callback=?", 
   "apiversion=4.9&passkey=" + api_key + "&filter=id:"+$(this).attr('id')+"&include=reviews,products&sort_reviews=submissiontime:desc&limit=" + num_items,
    function(json){
     var products = {};
     var productURL = {};
     var productIMG = {};
      jQuery.each(json.Includes.Products, function(index, product) {
        products[product.Id] = product.Name;
        productURL[product.Id] = product.ProductPageUrl;
        productIMG[product.Id] = product.ImageUrl;
      });
      $.each(json.Includes.Reviews, function(index, review) {
        var reviewSingular = "<div id='review_"+review['Id']+"' class='review' ><img src='"+productIMG[review['ProductId']]+"' style='width:100px;float:left;' /><h2 class='productTitle'>"+products[review['ProductId']]+"</h2><p class='hide-review'><strong>"+review['Title']+"</strong><br/>"+review['ReviewText']+"<br /><a href='"+productURL[review['ProductId']]+"' target='_blank'>Go to product</a></div>";

        $("#reviews").append(reviewSingular);
       
      });
  });

});

$('body').on( 'click', 'h2.productTitle', function () { 
 $(this).next('p').toggleClass('show-review').toggleClass('hide-review');
      });



});