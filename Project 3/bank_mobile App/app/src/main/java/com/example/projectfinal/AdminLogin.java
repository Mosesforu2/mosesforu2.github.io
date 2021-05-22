package com.example.projectfinal;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.content.Intent;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class AdminLogin extends AppCompatActivity {

    EditText Username,Password;
    Button BtnSignIn;

    DBHelper2 myDB;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_login);

        Username = (EditText) findViewById(R.id.Adusername);
        Password = (EditText) findViewById(R.id.Admcode);
        BtnSignIn = (Button) findViewById(R.id.AdbtnLogin);

        myDB = new DBHelper2(this);

        BtnSignIn.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v) {
                String user = Username.getText().toString();
                String pass = Password.getText().toString();


                if(user.equals("") || pass.equals("")){
                    Toast.makeText(AdminLogin.this,"Please provide your username and admin code",Toast.LENGTH_LONG).show();
                }
                else{
                    Boolean result = myDB.checkusernamePassword(user,pass);
                    if(result == true){
                        Intent intent = new Intent(getApplicationContext(),AdminHome.class);
                        startActivity(intent);
                    }
                    else{
                        Toast.makeText(AdminLogin.this, "Username or admin code is incorrect", Toast.LENGTH_LONG).show();
                    }
                }
            }
        });

    }
}