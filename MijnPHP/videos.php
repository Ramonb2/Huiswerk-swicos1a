<form action="videos.php" method="POST">
<input type="text" name="submit" value="Youtube link">
</form>

<?php
class youtube {

    public $video;
    public $width;
    public $height;
    
    
    function __construct ($width="640", $height="360"){
        
        $this->width=$width;
        $this->height=$height;      
                
        if($this->width<220){
            // minimum width
            $this->width=220;
        }
        if($this->height<220){
            // minimum height
            $this->height=220;
        }
        
    }    
    
    function play_video(){
        
        // Default video settings: 
        #
        # youtube_list = false
        # youtube_video = false
        
        $youtube_list = false;    
        $youtube_video = false;    
        
        // always check contains youtube.com or youtube.be as a reference....
        
        if(stristr($this->video, "youtube.com")==true ||(stristr($this->video, "youtube.be") || (stristr($this->video, "youtu.be")))){
            
            if(stristr($this->video, "v")==true){
                
                // the link contains a v in the url....    
                                        
                $youtube_video = true;    
                
                if(stristr($this->video, "list")==true){
                    
                // the video is part of a playlist
                
                    $youtube_list = true;

                } 
                if($youtube_list==false){
                    
                    // Display a single video
                    
                    $test = stristr($this->video, "v=");
                    $test = substr($test,2);
                    
                    $play ='<iframe width="'.$this->width.'" height="'.$this->height.'" src="http://www.youtube.com/embed/'.$test.'?rel=0" frameborder="0" allowfullscreen></iframe>';
                }
            }
            
            if(stristr($this->video, "list")==true || ($youtube_list==true)){
                
                // Display a video play list 
                $youtube_list = true;
                $youtube_video = true;            
                $test = stristr($this->video, "list=");        
                
                $play = '<iframe width="'.$this->width.'" height="'.$this->height.'" src="http://www.youtube.com/embed/videoseries?'.$test.'" frameborder="0" allowfullscreen></iframe>';

            } 
            
            if(stristr($this->video,".be")){
                
                // Display a single video based on the "shared link" URL.                
                
                
                $youtube_video = true;
                $test = stristr($this->video, "be/");
                $test = substr($test, 3);
                
                $play ='<iframe width="'.$this->width.'" height="'.$this->height.'" src="http://www.youtube.com/embed/'.$test.'?rel=0" frameborder="0" allowfullscreen autoplay></iframe>';

            } if($youtube_video == false){
                
                // We are unable to determine the video.
                
                $play = "<b>Video : ". $this->video . " not found, sorry</b>";
            }
        } else {
            
        // This is not a valid youtube requeust
            
            $play = "<b>Video : ". $this->video . " not found, sorry</b>";
        }
        
        // Return the results        
        
        return $this->play_video=$play;        
    }
}





$video = new youtube;


// shared link
echo "<hr>";
$video->width = "640";
$video->height="360";

$video->video=( $_POST["submit"] );
$youtube = $video->play_video();

echo $youtube;
?>