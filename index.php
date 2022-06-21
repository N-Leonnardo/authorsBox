<br>

<style>
  .post{
  	margin-top: 20px;
  }
  .parent-box{
  	width:100%;
  	background-color: white;
  	border-bottom: 1px solid black;
  	padding: 10px !important;
  	z-index: 7;
  }
  
  .content{
  	padding: 0 !important;
  }
  
  .authorTitle{
      font-weight: bolder !important;
  	font-size:20px;
    }
  
  .picture{
  	width: 100px !important;
  	border-radius: 100% !important;
  	margin-right: 20px;
  }
  
  .author-data{
  	font-size: 16px;
  	line-height:1.5;
  }
  
  .biography-box{
      line-height: normal !important;
      margin-right: 2em;
    }
    
  @media screen and (max-width: 623px) {
    .panel-box {
      display: none !important;
    }

  }

  </style>
  
  
  <div class="parent-box" style="
  display: flex; 
  flex-direction: row;"
  >
    <div class="panel-box row" style="
    display: flex;
    justify-content: center;
    align-items: 
    center;
    flex-direction: row;"
    >
      <div class="picture-box">
        <div class="picture">
          <?php echo get_avatar( get_the_author_meta('email'), '200' ); ?>
        </div>
      </div>
      
      <div class="author-data">
        <div class="authorTitle column">
            <?php echo get_the_author_meta('display_name', $author_id); ?>
        </div>
        
        <div class="biographybox" style="flex: 1;">
            <?php echo esc_textarea(the_author_meta('description')); ?>
        </div>
      </div>
  </div>
</div>