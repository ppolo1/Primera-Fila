package com.example.sprint2_adrian_adriana_daw;

import android.os.Bundle;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class Coleccion extends AppCompatActivity {

    ImageView img1, img2, img3, imgLogo;
    TextView txt1, txt2, txt3, desc1, desc2, desc3, prec1, prec2, prec3;
    ImageButton btBack;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_coleccion);

        inicializarViews();

        btBack.setOnClickListener(v -> {
            onBackPressed();
        });

    }

    public void inicializarViews(){

            btBack = findViewById(R.id.backButton);
            imgLogo = findViewById(R.id.imgLogo);
            imgLogo.setImageResource(R.drawable.img_logo);
            img1 = findViewById(R.id.img1);
            img2=findViewById(R.id.img2);
            img3 = findViewById(R.id.img3);

            txt1 = findViewById(R.id.nombre1);
            txt2 = findViewById(R.id.nombre2);
            txt3 = findViewById(R.id.nombre3);

            desc1 = findViewById(R.id.descripcion1);
            desc2 = findViewById(R.id.descripcion2);
            desc3 = findViewById(R.id.descripcion3);

            prec1 = findViewById(R.id.precio1);
            prec2 = findViewById(R.id.precio2);
            prec3 = findViewById(R.id.precio3);

            int opcion = getIntent().getIntExtra("opcion", 0);
            if(opcion==1){
                rellenarDatos(R.drawable.mueble1, "Mueble_halloween",
                        "Descripcion_halloween", "Precio_halloween",
                        R.drawable.mueble2, "Mueble_halloween",
                        "Descripcion_halloween", "Precio_halloween", R.drawable.mueble3,
                        "Mueble_halloween",
                        "Descripcion_halloween", "Precio_halloween"

                );
            }else if (opcion ==2){
                rellenarDatos(R.drawable.mueble4, "Mueble_thanksgiving",
                        "Descripcion_thanksgiving", "Precio_thanksgiving",
                        R.drawable.mueble6, "Mueble_thanksgiving",
                        "Descripcion_thanksgiving", "Precio_thanksgiving", R.drawable.mueble5,
                        "Mueble_thanksgiving",
                        "Descripcion_thanksgiving", "Precio_thanksgiving");

            }else if (opcion ==3){
                rellenarDatos(R.drawable.mueble6, "Mueble_christmas",
                "Descripcion_christmas", "Precio_christmas",
                R.drawable.mueble2, "Mueble_christmas",
                "Descripcion_christmas", "Precio_christmas", R.drawable.mueble3,
                "Mueble_christmas",
                "Descripcion_christmas", "Precio_christmas");
            }else if(opcion ==4) {

                  rellenarDatos(R.drawable.mueble6, "Mueble_thanksgiving",
                "Descripcion_valentines", "Precio_valentines",
                  R.drawable.mueble4, "Mueble_valentines",
                "Descripcion_valentines", "Precio_valentines", R.drawable.mueble5,
                "Mueble_valentines",
            "Descripcion_valentines", "Precio_valentines");
             } //TODO ya no quedan más imagenes de muebles, no se que precio ni nombre ni descripcion ponerle, pero vamos, opcion 1 halloween opcion 2 .....
    }


    public void rellenarDatos(int imagenResource, String nombre, String descripcion, String precio ,
                              int imagenResource2, String nombre2, String descripcion2, String precio2,
                              int imagenResource3, String nombre3, String descripcion3, String precio3){
        img1.setImageResource(imagenResource);
        txt1.setText(nombre);
        desc1.setText(descripcion);
        prec1.setText(precio);

        img2.setImageResource(imagenResource2);
        txt2.setText( nombre2);
        desc2.setText( descripcion2);
        prec2.setText(precio2);

        img3.setImageResource(imagenResource3);
        txt3.setText(nombre3);
        desc3.setText(descripcion3);
        prec3.setText(precio3);

        }
    }

