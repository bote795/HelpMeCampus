  $().ready(function() {
            $("#register").validate({
                rules: {
                    firstname: {
                        required: true,
                      	wordonly :true
                    },
                    lastname: {
                        required: true,
                      	wordonly :true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                  username:  {
                        required: true
                    },
                  major: {
                        required: true
                    },
                  school:  {
                        required: true 
                    },
                  room:  {
                        required: true,
                    	numbers: true
                    },
                  app_name:  {
                        required: true,
                    },
                  grad_yr:  {
                        required: true,
                     	numbers: true
                    },
                    password: {
                        required: true,
                     	password: true 
                    },
                }
             }); 
    		$.validator.addMethod("wordonly",function(value,element){
                return this.optional(element) || /^[a-zA-Z ]{2,30}$/.test(value);
            },"<br> Letter only limit of 30 words.");
    	
            $.validator.addMethod("password",function(value,element){
                return this.optional(element) || /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/i.test(value);
            },"<br> Passwords are 8-16 characters with uppercase letters, lowercase letters and at least one number.");

            $.validator.addMethod("numbers",function(value,element){
                return this.optional(element) || /^[0-9]{4,6}$/i.test(value);
            },"<br> must contain numbers only. ");
        
});
