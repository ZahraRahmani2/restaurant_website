let foods = [
  {
    "price": "$8",
    "name": "Homemade Burger",
    "ingredients": "bread, lettuce",
    "src" : "food1.png"
  },
  {
    "price": "$10",
    "name": "Falafel",
    "ingredients": "bread, hummus",
    "src" : "food2.png"
  },
  {
  	"price": "$18",
    "name": "Chicken biryani",
    "ingredients": "bread, Chicken, rice, spices",
     "src" : "Chicken_biryani.png"
  },
  {
    "price": "$10",
    "name": "Spagathi",
    "ingredients": "beans, tomato, Spagathi",
    "src" : "Spagathti.png"
  }
  ]

function showFood(x){
  for(var i=0;i<arr.length;i++){
      if(i==x){
      	document.getElementById("foodname").innerHTML=arr[i].name;
      	document.getElementById("image").src = arr[i].src;
        document.getElementById("demo").innerHTML=arr[i].ingredients;
      }
  }
}
