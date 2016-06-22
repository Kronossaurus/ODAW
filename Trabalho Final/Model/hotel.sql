CREATE TABLE IF NOT EXISTS empregados
(
    nome varchar(100),
    codEmp integer NOT NULL AUTO_INCREMENT,
    CONSTRAINT empregados_pkey PRIMARY KEY (codEmp)
);

CREATE TABLE IF NOT EXISTS hoteis
(
    codHotel integer NOT NULL AUTO_INCREMENT,
    nome varchar(100),
    endereço varchar(250),
    telefone integer,
    CONSTRAINT hoteis_pkey PRIMARY KEY (codHotel)
);

CREATE TABLE IF NOT EXISTS tipoQuarto
(
    id integer NOT NULL AUTO_INCREMENT,
    nome varchar(100),
    camaExtra bool,
    CONSTRAINT tipoQuarto_pkey PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS quartos
(
    nQrto integer NOT NULL,
    andar integer NOT NULL,
    codHotel integer NOT NULL,
    id integer NOT NULL,
    CONSTRAINT quartos_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT quartos_fkey2 FOREIGN KEY (id)
        REFERENCES tipoQuarto (id) MATCH SIMPLE,
    CONSTRAINT quartos_pkey PRIMARY KEY (nQrto,codHotel)
);

CREATE TABLE IF NOT EXISTS servicos
(
    codS integer NOT NULL AUTO_INCREMENT,
    tipoS varchar(100),
    preco double,
    CONSTRAINT servicos_pkey PRIMARY KEY (codS)
);

CREATE TABLE IF NOT EXISTS clientes
(
    nRegistro integer NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    endereço varchar(250),
    telefone integer,
	cpf integer,
    CONSTRAINT clientes_pkey PRIMARY KEY (nRegistro)
);

CREATE TABLE IF NOT EXISTS estadias
(
    dtCIn date,
    dtCOut date,
    codEstadia integer NOT NULL AUTO_INCREMENT,
    codHotel integer NOT NULL,
    nRegistro integer NOT NULL,
    CONSTRAINT estadias_fkey FOREIGN KEY (nRegistro)
        REFERENCES clientes (nRegistro) MATCH SIMPLE,
    CONSTRAINT estadias_fkey2 FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT estadias_pkey PRIMARY KEY (codEstadia)
);

CREATE TABLE IF NOT EXISTS reserva
(
    dataPagamento date,
    dataReserva date,
    camaExtra bool,
    codHotel integer NOT NULL,
    nRegistro integer NOT NULL,
    CONSTRAINT clientes_fkey FOREIGN KEY (nRegistro)
        REFERENCES clientes (nRegistro) MATCH SIMPLE,
    CONSTRAINT hoteis_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT reserva_pkey PRIMARY KEY (nRegistro,codHotel,dataReserva)
);

CREATE TABLE IF NOT EXISTS limpeza
(
    dataLimpeza date,
    codHotel integer NOT NULL,
    nQrto integer NOT NULL,
    codEmp integer NOT NULL,
    CONSTRAINT limpeza_fkey FOREIGN KEY (nQrto,codHotel)
        REFERENCES quartos (nQrto,codHotel) MATCH SIMPLE,
    CONSTRAINT limpeza_fkey2 FOREIGN KEY (codEmp)
        REFERENCES empregados (codEmp) MATCH SIMPLE,
    CONSTRAINT limpeza_pkey PRIMARY KEY (nQrto,codEmp,dataLimpeza)
);

CREATE TABLE IF NOT EXISTS oferece
(
    dataServico date,
    horaServico timestamp,
    codS integer NOT NULL,
    codEstadia integer NOT NULL,
    CONSTRAINT oferece_fkey FOREIGN KEY (codS)
        REFERENCES servicos (codS) MATCH SIMPLE,
    CONSTRAINT oferece_fkey2 FOREIGN KEY (codEstadia)
        REFERENCES estadias (CodEstadia) MATCH SIMPLE,
    CONSTRAINT oferece_pkey PRIMARY KEY (codS,codEstadia,dataServico,horaServico)
);

CREATE TABLE IF NOT EXISTS preco
(
    valor double,
    codHotel integer NOT NULL,
    id integer NOT NULL,
    CONSTRAINT preco_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT preco_fkey2 FOREIGN KEY (id)
        REFERENCES tipoQuarto (id) MATCH SIMPLE,
    CONSTRAINT preco_pkey PRIMARY KEY (codHotel,id)
);

CREATE DEFINER=`root`@`localhost` FUNCTION `insereCliente`(`nome` VARCHAR(100), `endereco` VARCHAR(250), `telefone` INT, `cpf` INT) RETURNS int(11)
    NO SQL
    DETERMINISTIC
BEGIN
    INSERT INTO clientes VALUES (null, nome, endereco, telefone, cpf);
    RETURN 1;
END
