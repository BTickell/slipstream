//localStorage.clear();
updateUL();

function Post(userInput) {
	
	this.text = userInput;	
};

var newPost = function() {
	var text = document.getElementById("textfield1").value;
	var post = new Post(text);
	console.log(post);
	localStorage.setItem(JSON.stringify(localStorage.length), JSON.stringify(post.text));
	console.log("got here!");
};	

document.forms["input"].onsubmit = newPost;

function updateUL() {
	var list = document.createElement('ul');

	for (i = localStorage.length-1; i >= 0; i -= 1) {
		var item = document.createElement('li');
		var content = localStorage.getItem(JSON.stringify(i));
		item.appendChild(document.createTextNode(content));
		list.appendChild(item);
	}

	document.getElementById('feedlist').appendChild(list);
}
