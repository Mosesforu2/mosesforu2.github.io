package com.example.projectfinal;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;

public class CustomerHome extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_customer_home);
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        return Utils2.inflateMenu(this,menu);
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        return  Utils2.handleMenuOption(this,item);
    }

}