-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-05-25 18:06:50.591

-- tables
-- Table: Imagen_material
CREATE TABLE Imagen_material (
    id int  NOT NULL,
    id_material int  NOT NULL,
    src varchar(30)  NOT NULL,
    CONSTRAINT PK_IMAGEN_MATERIAL PRIMARY KEY (id_material,id)
);

-- Table: Material
CREATE TABLE Material (
    id int  NOT NULL,
    nombre varchar(20)  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    CONSTRAINT PK_MATERIAL PRIMARY KEY (id)
);

-- Table: Solicitud_retiro
CREATE TABLE Solicitud_retiro (
    id int  NOT NULL,
    nombre varchar(20)  NOT NULL,
    apellido varchar(20)  NOT NULL,
    direccion varchar(30)  NOT NULL,
    telefono int  NOT NULL,
    franja_horaria varchar(15)  NOT NULL,
    volumen varchar(30)  NOT NULL,
    CONSTRAINT PK_SOLICITUD_RETIRO PRIMARY KEY (id)
);

-- foreign keys
-- Reference: FK_IMAGEN_MATERIAL_MATERIAL (table: Imagen_material)
ALTER TABLE Imagen_material ADD CONSTRAINT FK_IMAGEN_MATERIAL_MATERIAL
    FOREIGN KEY (id_material)
    REFERENCES Material (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

