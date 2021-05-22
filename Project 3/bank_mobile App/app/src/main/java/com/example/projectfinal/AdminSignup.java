package com.example.projectfinal;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class AdminSignup extends AppCompatActivity {

    EditText username,email,password,conf_password;
    Button btnSignUp,btnSignIn;
    DBHelper2 myDB;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_signup);

        username = (EditText)findViewById(R.id.adUsername);
        email = (EditText)findViewById(R.id.adEmail);
        password = (EditText)findViewById(R.id.admincode);
        conf_password = (EditText)findViewById(R.id.conf_admincode);

        btnSignUp = (Button)findViewById(R.id.adRegister);
        btnSignIn = (Button)findViewById(R.id.adSignIn);

        myDB = new DBHelper2(this);

        btnSignUp.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                String user = username.getText().toString();
                String e_mail = email.getText().toString();
                String pass = password.getText().toString();
                String conf_pass = conf_password.getText().toString();

                if(user.equals("") || e_mail.equals("") || pass.equals("") || conf_pass.equals("")){
                    Toast.makeText(AdminSignup.this, "All fields required!.", Toast.LENGTH_SHORT).show();
                }
                else{
                    if(pass.equals(conf_pass)){
                        Boolean usercheckResult = myDB.checkusername(user);
                        Boolean usercheckResult2 = myDB.checkemail(e_mail);
                        if(usercheckResult == false && usercheckResult2 == false){
                            Boolean regResult = myDB.insertData(user,e_mail,pass);
                            if(regResult == true){
                                Toast.makeText(AdminSignup.this, "You have registered successfully", Toast.LENGTH_SHORT).show();
                                Intent intent = new Intent(getApplicationContext(),AdminLogin.class);
                                startActivity(intent);
                            }
                            else{
                                Toast.makeText(AdminSignup.this, "Registration Failed", Toast.LENGTH_SHORT).show();
                            }
                        }
                        else{
                            Toast.makeText(AdminSignup.this, "There is a user with the same username. \nPlease choose a different username", Toast.LENGTH_SHORT).show();
                        }
                    }
                    else{
                        Toast.makeText(AdminSignup.this, "Passwords do not match.", Toast.LENGTH_SHORT).show();
                    }
                }
            }
        });
        btnSignIn.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(),AdminLogin.class);
                startActivity(intent);
            }
        });
    }




}