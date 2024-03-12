package com.example.sprint2_adrian_adriana_daw;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class Tienda extends AppCompatActivity {

    ImageView imgLogo;
    ImageButton backButton;
    TextView textView;
    Button halloween, thanksgiving, christmas, valentines;




    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_tienda);

        inicializarViews();

        backButton.setOnClickListener(v -> {
            onBackPressed();
        });

        halloween.setOnClickListener(v -> {
            elegirCategoria(1);
        });

        thanksgiving.setOnClickListener(v -> {
            elegirCategoria(2);
        });

        christmas.setOnClickListener(v -> {
            elegirCategoria(3);
        });

        valentines.setOnClickListener(v -> {
            elegirCategoria(4);
        });


    }

    public void inicializarViews(){
        imgLogo = findViewById(R.id.imgLogo);
        imgLogo.setImageResource(R.drawable.img_logo);
        textView = findViewById(R.id.textView);
        String nombre = getIntent().getStringExtra("NombreCliente");
        String text = "Bienvenid@, " + nombre + ", aquí tienes unas recomendaciones categorizadas en varias fechas.";
        textView.setText(text);
        backButton = findViewById(R.id.backButton);
        halloween = findViewById(R.id.button);
        thanksgiving = findViewById(R.id.button2);
        christmas = findViewById(R.id.button3);
        valentines = findViewById(R.id.button4);
    }

    public void elegirCategoria(int opcion){
        Intent intent = new Intent(this, Coleccion.class);
        intent.putExtra("opcion", opcion);
        startActivity(intent);
    }
}
