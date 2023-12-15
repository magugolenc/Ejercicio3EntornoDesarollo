CREATE DATABASE Juegos;

USE Juegos;
CREATE TABLE Juegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    edicion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);

INSERT INTO Juegos (nombre, descripcion, edicion, precio, stock) VALUES
('God of War: Ragnarok', 'Juego solitario, rpg, campaña solitaria y mundo abierto con la historia de kratos un semidios caído.','Estandar', 69.99, 50),
('God of War: Ragnarok', 'Juego solitario, rpg, campaña solitaria y mundo abierto con la historia de kratos un semidios caído. Incluye la skin de kratos terron de azúcar.','Deluxe', 79.99, 400),
('God of War: Ragnarok', 'Juego solitario, rpg, campaña solitaria y mundo abierto con la historia de kratos un semidios caído. Incluye el contenido adicional de la edición Deluxe y el Seasson pass con las futura expasiones de pago.','Definitiva', 99.99, 400),
('Destiny 2', 'Juego multijugador, mmorpg, shooter y de campaña cooperativa en el mundo de destiny donde intentaras forgarte un nombre y convertirte en un verdadero paladín espacial.','Estandar', 19.99, 200);
('Destiny 2', 'Juego multijugador, mmorpg, shooter y de campaña cooperativa en el mundo de destiny donde intentaras forgarte un nombre y convertirte en un verdadero paladín espacial. Cuenta con el Seasson pass en el que se añadiran 5 nuevas historias en el mundo de Destiny 2.','Deluxe', 79.99, 200);
