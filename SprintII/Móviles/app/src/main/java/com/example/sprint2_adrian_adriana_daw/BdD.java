package com.example.sprint2_adrian_adriana_daw;

import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class BdD extends SQLiteOpenHelper {
    private static final String DB_NAME = "BdDUsuarios";

    private static final int DB_VERSION = 4;
    private static final String TABLE_NAME = "Registro_Usuarios";

    private static final String COL_USUARIO = "nombre";

    private static final String COL_CONTRASENA = "contrasena";
    private static final String COL_EMAIL = "email";



    public BdD(Context context) {
        super(context, DB_NAME, null, DB_VERSION);

    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        String query = "CREATE TABLE " + TABLE_NAME + " ("
                    + COL_EMAIL + " TEXT PRIMARY KEY , "
                + COL_USUARIO + " TEXT  , "
                + COL_CONTRASENA + " TEXT )";
        db.execSQL(query);
    }

    public boolean addUsuario(Usuario usuario){
        SQLiteDatabase db = this.getWritableDatabase();
        db.execSQL("INSERT INTO " + TABLE_NAME + "( " + COL_USUARIO + ", "  + COL_CONTRASENA + ", " + COL_EMAIL + ") " +
                "VALUES ('" + usuario.getNombre() + "', '" + usuario.getContrasena() + "', '" + usuario.getEmail() + "');");
        return true;
    }

    public Usuario encontrarPorMail(String email) {
        SQLiteDatabase db = this.getReadableDatabase();
        Usuario usuarioEncontrado = null;

        String[] columns = {COL_USUARIO, COL_CONTRASENA, COL_EMAIL};
        String selection = COL_EMAIL + " = ?";
        String[] selectionArgs = {email};
        Cursor cursor = db.query(TABLE_NAME, columns, selection, selectionArgs, null, null, null);

        if (cursor.moveToFirst()) {
            int nombreIndex = cursor.getColumnIndex(COL_USUARIO);
            int contrasenaIndex = cursor.getColumnIndex(COL_CONTRASENA);
            int emailIndex = cursor.getColumnIndex(COL_EMAIL);

            String nombre = cursor.getString(nombreIndex);
            String contrasena = cursor.getString(contrasenaIndex);
            String correo = cursor.getString(emailIndex);

            usuarioEncontrado = new Usuario(correo, nombre, contrasena);
        }

        cursor.close();
        return usuarioEncontrado;
    }
    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        db.execSQL("DROP TABLE IF EXISTS " + TABLE_NAME);
        onCreate(db);
    }
}