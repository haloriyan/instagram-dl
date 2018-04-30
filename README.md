# instagram-dl
A tool for downloading photos from instagram or download all photos from instagram account. Just paste URL to the box and hit Enter you'll get the photo

# API Usage
Do curl to this URI, for fetch all photos from profile :
```
http://tools.riyansatria.tk/instagram/api.php?type=account&url=INSTAGRAM+ACCOUNT+URL
```
and for one photo from a post :
```
http://tools.riyansatria.tk/instagram/api.php?type=post&url=INSTAGRAM+POST+URL
```
you will get this response :
```
{
  "status": "200",
  "description": "OK",
  "image": "URL IMAGE",
}
``` 
the image object will be array objects if your requesting `type=account`.

### Note
If you experienced a CORS Policy issue, try adding [Allow-Control-Allow-Origin: * extension](https://chrome.google.com/webstore/detail/allow-control-allow-origi/nlfbmbojpeacfghkpbjhddihlkkiljbi/related) to your Chrome
