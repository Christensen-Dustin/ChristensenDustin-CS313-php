function submitform(){
  var book = document.getElementsByName('book')[0];
  var chapter = document.getElementsByName('chapter')[0];
  var verse = document.getElementsByName('verse')[0];
  var content = document.getElementsByName('content')[0];
  var topics = document.getElementsByName('topics');
  var newTopic = document.getElementsByName('newTopic')[0];
  var topicName = document.getElementsByName('topicName')[0];
        
  var topicVal = "["; 
  for (var i = 0; i < topics.length; i++){
      if (i > 0){
          topicVal += ",";
      }
      topicVal += topics[i];
  }
    topicVal +="]";
    
    
    
    
  var postString = "&book=" + book.value + 
      "&chapter=" + chapter.value + 
      "&verse=" + verse.value+ 
      "&content=" + content.value + 
      "&topics=" + topicVal + 
      "&newTopic=" + newTopic.value + 
      "&topicName=" + topicName.value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('result').innerHTML = xhttp.responseText;
      }
    }
  
  xhttp.open("POST", "teach06_insert.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send(postString);
}