

var posts = [];

class Post {
	constructor(userInput) {
		this.text = userInput;
	};	
};

var newPost = function() {
	var text = document.getElementById("textfield1").value;
	var post = new Post(text);
	console.log(post);
	posts.push(post);
	console.log(posts);
};	

document.forms["input"].onsubmit = newPost;