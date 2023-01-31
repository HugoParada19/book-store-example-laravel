var request =
{
	name:'test',
	author:'Voltaire',
	ISBN:'1234-567-89-XYZ',
	Stock:2,
	Price:17.32,
	Description:'Livro de teste sobre o voltaire'
}

function setName(name)
{
	request['name'] = name;
}

function setAuthor(author)
{
	request['author'] = author;
}

function setISBN(ISBN)
{
	request['ISBN'] = ISBN;
}

function setStock(stock)
{
	request['stock'] = stock;
}

function setPrice(price)
{
	request['price'] = price;
}

function setDescription(description)
{
	request['description'] = description;
}

function alertRequest()
{
	alert(request);
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function beginPOST()
{
    $.ajax({
       url: "/test",
       type: "POST",
       dataType: 'json',           
       data: request,
       success: function(data) {
           console.log(data);
       },
       error: function() {
           console.log("Error");
       }
   });
}

function success()
{
	alert("Success");
}
