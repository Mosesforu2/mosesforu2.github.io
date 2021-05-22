package com.example.projectfinal;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


public class MainActivity extends AppCompatActivity {

    EditText username,email,password,conf_password;
    Button btnSignUp,btnSignIn;
    DBHelper2 myDB;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        username = (EditText)findViewById(R.id.Username);
        email = (EditText)findViewById(R.id.Email);
        password = (EditText)findViewById(R.id.Password);
        conf_password = (EditText)findViewById(R.id.Conf_Password);

        btnSignUp = (Button)findViewById(R.id.btnSignUp);
        btnSignIn = (Button)findViewById(R.id.btnSignIn);

        myDB = new DBHelper2(this);

        btnSignUp.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                String user = username.getText().toString();
                String e_mail = email.getText().toString();
                String pass = password.getText().toString();
                String conf_pass = conf_password.getText().toString();

                if(user.equals("") || e_mail.equals("") || pass.equals("") || conf_pass.equals("")){
                    Toast.makeText(MainActivity.this, "All fields required!.", Toast.LENGTH_SHORT).show();
                }
                else{
                    if(pass.equals(conf_pass)){
                        Boolean usercheckResult = myDB.checkusername(user);
                        Boolean usercheckResult2 = myDB.checkemail(e_mail);
                        if(usercheckResult == false && usercheckResult2 == false){
                            Boolean regResult = myDB.insertData(user,e_mail,pass);
                            if(regResult == true){
                                Toast.makeText(MainActivity.this, "You have registered successfully", Toast.LENGTH_SHORT).show();
                                Intent intent = new Intent(getApplicationContext(),LoginActivity.class);
                                startActivity(intent);
                            }
                            else{
                                Toast.makeText(MainActivity.this, "Registration Failed", Toast.LENGTH_SHORT).show();
                            }
                        }
                        else{
                            Toast.makeText(MainActivity.this, "There is a user with the same username. \nPlease choose a different username", Toast.LENGTH_SHORT).show();
                        }
                    }
                    else{
                        Toast.makeText(MainActivity.this, "Passwords do not match.", Toast.LENGTH_SHORT).show();
                    }
                }
            }
        });
        btnSignIn.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(),LoginActivity.class);
                startActivity(intent);
            }
        });
    }




}