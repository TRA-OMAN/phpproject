<!DOCTYPE html>


<?php include ('server.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        
    </head>
    <body>
  
        <link href="newcs.css" rel="stylesheet" type="text/css"/>
        <div id="container">
  <h1>&bull; knowledge Transfer & Feedback &bull;</h1>
   <h1>&bull; التدريب والتقييم &bull;</h1>
  <div class="underline">
  </div>
  
   
  
   
  <form action="index.php" method="post" id="contact_form">
      
      <h3>Training details/بيانات التدريب</h3>
      
       
      
      <div class="subject">
      <label for="subject"></label>
      
      <select placeholder="Subject line" name="subject" id="subject_input" required >
          
        <option disabled hidden selected>    Application Name/اسم النظام:  </option>

        <option>
            
            <?php
         echo $row['appname'];
         ?>
            
        </option>
      
        
      </select>
     
    </div>
      
      
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Delivered by /اسم المتحدث" name="name" id="name_input" required>
    </div>
      
      <div class="date">
     
      <label for="start"></label>
      <input type="date" id="start" name="trip-start"
       min="2022-01-01" max="2026-12-31">
    </div>
      
      
      
      <h3>Participant details /بيانات المتدرب </h3>
      
      
      
      <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Employee Name /اسم الموظف " name="name" id="name_input" required>
    </div>
 
      
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="ID  / الرقم الوظيفي " name="name" id="telephone_input" required>
    </div>
    
      
      
      <h3>Topics (Module - Pages) / (وحدات - صفحات )المواضيع </h3>
      
      
      <div class="name">
      <input type="checkbox" class="specialization" id="cs" name="specialization[]" value="<?php echo $choice1 ?> "> Complaints pages صفحات نظام الشكاوي
      </div>
      <div class="name">
     <input type="checkbox" class="specialization" id="it" name="specialization[]" value="<?php echo $choice1 ?> "> System workflow سير عمل النظام
      </div>
      <div class="name">
     <input type="checkbox" class="specialization" id="ca" name="specialization[]" value="<?php echo $choice1 ?> "> Users المستخدمين
     </div>
      
      
      
      <h3>Feedback  / التقييم  </h3>
      
      
      
      <div>
       <fieldset>
    <legend>1. How satisfied were you with the training?</legend>

    <div>
      <input type="radio" id="Very_satisfied" name="cho1" value="very_satisfied "
             checked>
      <label for="Very_satisfied">Very_satisfied</label>
    </div>
    <div>
      <input type="radio" id="Satisfied" name="cho1" value="satisfied">
      <label for="Satisfied">Satisfied</label>
    </div>
    <div>
      <input type="radio" id="Unsatisfied" name="cho1" value="unsatisfied">
      <label for="Unsatisfied">Unsatisfied</label>
    </div>
     </fieldset>
      </div>

      <div > 
  
  <fieldset>
    <legend>Select a maintenance drone:</legend>

    <div>
      <input type="radio"  name="cho2" value="yes"
             checked>
      <label for="Yes">Yes</label>
    </div>

    <div>
      <input type="radio" name="cho2" value="no">
      <label for="No">No</label>
    </div>

</fieldset>
      </div>
      
      
      
      <div>
       <fieldset>
    <legend>3. How would you rate the speakers?</legend>

    <div>
      <input type="radio" id="Very_good" name="cho3" value="very_good"
             checked>
      <label for="Very_good">Very_good</label>
    </div>
    <div>
      <input type="radio" id="Good" name="cho3" value="good">
      <label for="Good">Good</label>
    </div>
    <div>
      <input type="radio" id="Poor" name="cho3" value="poor">
      <label for="Poor">Poor</label>
    </div>
     </fieldset>
      </div>
      
      
      
      <h4>4. Other comment:</h4>
      
      
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="اكتب هنا" id="message_input" cols="30" rows="5" required></textarea>
    </div>
      
      
      
      
      
      
      
      <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="Employee Name /اسم الموظف " name="name" id="name_input" required>
    </div>
      
      
      <div class="name">
     <input type="checkbox" class="specialization" id="ca" name="specialization[]" placeholder="Employee Name /اسم الموظف " value="<?php echo $choice1 ?> "> Signature / التوقيع:
     </div>
      
      
      
      
     
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
          
  </form><!-- // End form -->
</div><!-- // End #container -->
        
        

        
    </body>
</html>
