<style>
    #grad1 {
            margin-top: 120px;
        background-color: #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA)
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;
        position: relative
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
    }

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue
    }

    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative;
        width:1000px;
        margin-left:-50px;
        
    }

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left
    }

    #checkcontrol{
        width:150px;
        font-size:22px;
        background-color:#e85a96;
        color:white !important;
    }
  
  .konumduzenleme{
    margin-bottom: 0px;
    width: 510px;
    float: left;
    position: relative;
    height: 95px;
    word-break: break-word;
    margin-left: 10px;
  }
  .konumduzenleme span{
      font-size:20px;
      float:left;
  }
   
  .konumduzenleme span img{
      width:35;
      height:35px;
      margin-left:0px
      float:left;
      margin-top:-10px;
  }
  .konumduzenleme label{
    font-size: 14px;
    font-weight: 800;
    margin-left: 40px;
    margin-top:10px;
    position: absolute;
    left: 0px;
  }
  .konumduzenleme .konumlabel{
    font-size: 14px;
    font-weight: 800;
    margin-left: 40px;
    margin-top:10px;
    position: absolute;
    left: -35px;
  }
  .pricebtn{
      float:left;
      margin-left:15px;
      width:200px;
      height:50px;
      text-align:center;
      background-color:#e85a96;
      color:white;
      font-size:14px;
      border:1px solid white;
  }
  #map{
      width: 350px;
      height: 600px;
      float: left;
  }
  @media (max-width: 767px) {
  .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
    width:295px;
    margin-left:0px;
    }
    #map{
      width: 295px;
    height: 500px;
    float: left;
  }
     .konumduzenleme{
    margin-bottom: 0px;
    width: 510px;
    float: left;
    position: relative;
    height: 95px;
    word-break: break-word;
    margin-left: 10px;
    overflow-y: scroll;
  }
  .konumduzenleme span{
      font-size:20px;
      float:left;
  }
   
  .konumduzenleme span img{
      width:35;
      height:35px;
      margin-left:0px
      float:left;
      margin-top:0px;
  }
  .konumduzenleme .konumlabel{
           font-size: 14px;
    font-weight: 800;
    width: 275px;

    margin-left: 40px;
    margin-top: 10px;
    position: absolute;
   
    left: -35px;
  }
  .konumduzenleme label{
        font-size: 14px;
    font-weight: 800;
    margin-left: 40px;
    margin-top: 10px;
    position: absolute;
   
    left: 0px;
  }
  .pricebtn{
      float:left;
      margin-left:15px;
      width:265px;
      height:50px;
      text-align:center;
      background-color:#e85a96;
      color:white;
      font-size:14px;
      border:1px solid white;
      cursor:pointer;
  }
  }
  @media (width:375px) and (height:667px){
    .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
    width: 345px;
    margin-left: 0px;
    }
     #map{
      width: 345px;
      height: 600px;
      float: left;
  }
    .konumduzenleme label{
    font-size: 14px;
    font-weight: 800;
    margin-left: 40px;
    margin-top:10px;
    position: absolute;
    left: 0px;
  }
  .pricebtn {
    float: left;
    margin-left: 15px;
    width: 315px;
    height: 50px;
    text-align: center;
    background-color: #e85a96;
    color: white;
    font-size: 14px;
    border: 1px solid white;
    cursor: pointer;
}
  }
  @media (width:414px) and (height:736px){
      .card {
    z-index: 0;
    border: none;
    border-radius: 0.5rem;
    position: relative;
    width: 380px;
    margin-left: 0px;
      }
          #map{
      width: 380px;
      height: 600px;
      float: left;
  }
        #progressbar .active {
    color: #000000;
    width: 230px;
    font-size: 16px;
    visibility: visible;
    margin-left:45px;
    
    }
     .konumduzenleme label{
    font-size: 14px;
    font-weight: 800;
    margin-left: 40px;
    margin-top:10px;
    position: absolute;
    left: 0px;
  }
    .pricebtn {
    float: left;
    margin-left: 15px;
    width: 350px;
    height: 50px;
    text-align: center;
    background-color: #e85a96;
    color: white;
    font-size: 14px;
    border: 1px solid white;
    cursor: pointer;
}
   
  }


 
</style>

<script>

    $(document).ready(function() {
    
   
        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;;
        $(".next").click(function() {
                var telcheck=document.getElementById("login-tel").value;
                 
                  var code=document.getElementById("code").value;
                  
                  if(telcheck==code)
                  {
                     
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                  }
                  else{
                      alert("Yanlış Girdiniz");
                  }
            
            //Add Class Active
            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

       
        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
   
    
</script>