package com.example.projectfinal;

import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;

public class Utils2 {
    public static boolean  inflateMenu(Activity activity, Menu menu) {
        MenuInflater inflater = activity.getMenuInflater();
        inflater.inflate( R.menu.customer_menu, menu);
        return true;
    }

    public static boolean handleMenuOption(Activity activity, MenuItem item) {
        Intent intent;
        switch(item.getItemId()) {
            case R.id.optCustomerHome :
                intent = new Intent(activity,CustomerHome.class);
                activity.startActivity(intent);
                break;

            case R.id.optSearchTransactions :
                intent = new Intent(activity,SearchTransactions.class);
                activity.startActivity(intent);
                break;

            case R.id.optRecentTransactions :
                intent = new Intent(activity,ListRecentTransactions.class);
                activity.startActivity(intent);
                break;

            case R.id.optAddTransaction :
                intent = new Intent(activity,AddTransaction.class);
                activity.startActivity(intent);
                break;
        }
        return true;
    }

}