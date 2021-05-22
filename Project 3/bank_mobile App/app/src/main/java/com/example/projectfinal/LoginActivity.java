package com.example.projectfinal;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.content.Intent;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;


public class LoginActivity extends AppCompatActivity {

    EditText Username,Password;
    Button BtnSignIn, BtnAdmin;

    DBHelper2 myDB;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        Username = (EditText) findViewById(R.id.username);
        Password = (EditText) findViewById(R.id.password);
        BtnSignIn = (Button) findViewById(R.id.btnSignIn);
        BtnAdmin = (Button) findViewById(R.id.btnAdmin);

        myDB = new DBHelper2(this);

        BtnSignIn.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                String user = Username.getText().toString();
                String pass = Password.getText().toString();


                if(user.equals("") || pass.equals("")){
                    Toast.makeText(LoginActivity.this,"Please provide your username and password",Toast.LENGTH_SHORT).show();
                }
                else{
                    Boolean result = myDB.checkusernamePassword(user,pass);
                    if(result == true){
                        Intent intent = new Intent(getApplicationContext(),CustomerHome.class);
                        startActivity(intent);
                    }
                    else{
                        Toast.makeText(LoginActivity.this, "Username or password incorrect", Toast.LENGTH_SHORT).show();
                    }
                }
            }
        });

        BtnAdmin.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(getApplicationContext(),AdminSignup.class);
                startActivity(intent);
            }
        });
    }
}