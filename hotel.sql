CREATE DATABASE hotel

CREATE TABLE empregados
(
    nome varchar(100),
    codEmp integer NOT NULL,
    CONSTRAINT empregados_pkey PRIMARY KEY (codEmp)
);

CREATE TABLE quartos
(
    nQrto integer NOT NULL,
    andar integer NOT NULL,
    CONSTRAINT quartos_pkey PRIMARY KEY (nQrto)
);

CREATE TABLE servicos
(
    codS integer NOT NULL,
    tipoS varchar(100),
    preco float,
    CONSTRAINT servicos_pkey PRIMARY KEY (codS)
);

CREATE TABLE estadias
(
    dtCIn date,
    dtCOut date,
    codEstadia integer NOT NULL,
    CONSTRAINT estadias_pkey PRIMARY KEY (codEstadia)
);

CREATE TABLE clientes
(
    nRegistro integer NOT NULL,
    nome varchar(100),
    endereço varchar(250),
    telefone integer,
    CONSTRAINT clientes_pkey PRIMARY KEY (nRegistro)
);

CREATE TABLE reserva
(
    dataPagamento date,
    dataReserva date,
    camaExtra bool,
    CONSTRAINT reserva_pkey PRIMARY KEY ()
);

CREATE TABLE hoteis
(
    codHotel integer NOT NULL,
    nome varchar(100),
    endereço varchar(250),
    telefone integer,
    CONSTRAINT hoteis_pkey PRIMARY KEY (codHotel)
);

CREATE TABLE tipoQuarto
(
    id integer NOT NULL,
    nome varchar(100),
    camaExtra bool,
    CONSTRAINT _pkey PRIMARY KEY ()
);

CREATE TABLE limpeza
(
    dataLimpeza date,
    CONSTRAINT limpeza_fkey FOREIGN KEY (nQrto)
        REFERENCES quartos (nQrto) MATCH SIMPLE
    CONSTRAINT limpeza_fkey FOREIGN KEY (codEmp)
        REFERENCES empregados (codEmp) MATCH SIMPLE
);

CREATE TABLE oferece
(
    dataServico date,
    horaServico timestamp,
    CONSTRAINT oferece_fkey FOREIGN KEY (codS)
        REFERENCES servicos (codS) MATCH SIMPLE
    CONSTRAINT oferece_fkey FOREIGN KEY (codEstadia)
        REFERENCES estadias (CodEstadia) MATCH SIMPLE
);