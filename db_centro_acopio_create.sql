-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-05-25 17:42:16.358

-- tables
-- Table: Imagen_material
CREATE TABLE Imagen_material (
    id int  NOT NULL,
    id_material int  NOT NULL,
    src varchar(30)  NOT NULL,
    CONSTRAINT Imagen_material_pk PRIMARY KEY (id_material,id)
);

-- Table: Material
CREATE TABLE Material (
    id int  NOT NULL,
    nombre varchar(20)  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    CONSTRAINT Material_pk PRIMARY KEY (id)
);

-- Table: Solicitud_retiro
CREATE TABLE Solicitud_retiro (
    id int  NOT NULL,
    nombre int  NOT NULL,
    apellido int  NOT NULL,
    direccion int  NOT NULL,
    telefono int  NOT NULL,
    franja_horaria int  NOT NULL,
    volumen int  NOT NULL,
    CONSTRAINT Solicitud_retiro_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: Imagen_material_Material (table: Imagen_material)
ALTER TABLE Imagen_material ADD CONSTRAINT Imagen_material_Material
    FOREIGN KEY (id_material)
    REFERENCES Material (id)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

