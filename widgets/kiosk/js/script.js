
  var api_key = "tq3ukwua3c8g67ehutcf7xlyu";

  var api_server = "http://stg.api.bazaarvoice.com/data/";

  function showReviews(id)
  {
  		$.ajax(
		{
			type: "POST",
			url: "getReviews.php",
			data: "id=" + id,
			cache: false,
			success: function(message)
			{
			$("#reviews").html(message);
			}
		});
  
  }
  	function lookup(inputString) {

  		if (inputString.length > 0)
  		{
  		$("#products").empty();
 var api_key = "tq3ukwua3c8g67ehutcf7xlyu";
// var api_key = "kuy3zj9pr3n7i0wxajrzj04xo";

  var api_server = "http://stg.api.bazaarvoice.com/data/";
$.getJSON(api_server+"products.json?callback=?", 
   "apiversion=5.4&passkey=" + api_key + "&search=%" + inputString + "%&limit=10&stats=reviews",
    function(json){
     // once we have the information, we render each line onto the page, and...
      $.each(json.Results, function(index, product) {
        if (product['ReviewStatistics']['AverageOverallRating'] != null)
        {
        var productSingular = "<div id='"+product['Id']+"' class='product' ><p><strong>"+product['Brand']['Name']+" "+product['Name']+"</strong> Rating:"+product['ReviewStatistics']['AverageOverallRating']+"</p></div>";
//shoves it in the 'authors' div placed on the page.
        $("#products").append(productSingular);
        }
       
      });
  });
}
else {}

/*
$.ajax(
		{
			type: "POST",
			url: "searchProducts.php",
			data: "queryString=" + inputString,
			cache: false,
			dataType: 'json',
			success: function(message)
			{
			$('#gymlist').html(message.gyms[0].text);
			evictMarkers();
			showGyms(message.gyms[0].id,map);
			}
		});
		*/	

	} // lookup
$(document).ready(function() {
$('body').on( 'click', 'div.product', function () { 
$("#reviews").empty();
$.getJSON(api_server+"reviews.json?callback=?", 
   "apiversion=5.4&passkey=" + api_key + "&Filter=ProductId:" + +$(this).attr('id') + "&Sort=Rating:desc&limit=10",
    function(json){
    
      $.each(json.Results, function(index, review) {
        if (review['Title'] != null && review['ReviewText'] != null)
        {
var starYes = (review['Rating']+1);
       
        var starNo = 6 - starYes;
        
        var StarFilled = Array(starYes).join("✭");
        if (starNo > 0)
    {
        var StarBlank = Array(starNo+1).join("⭐");
    }
    else
    {
      var StarBlank = "";
      }
      var StarRating = StarFilled + StarBlank; 
      var reviewSingular = "<div ><p><strong>"+review['Title']+"</strong><br />"+review['ReviewText']+" "+StarRating+"</p></div>";

        $("#reviews").append(reviewSingular);
       }
      });
  });
});
});
