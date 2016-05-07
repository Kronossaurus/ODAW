CREATE TABLE empregados
(
    nome varchar(100),
    codEmp integer NOT NULL,
    CONSTRAINT empregados_pkey PRIMARY KEY (codEmp)
);

CREATE TABLE hoteis
(
    codHotel integer NOT NULL,
    nome varchar(100),
    endereço varchar(250),
    telefone integer,
    CONSTRAINT hoteis_pkey PRIMARY KEY (codHotel)
);

CREATE TABLE quartos
(
    nQrto integer NOT NULL,
    andar integer NOT NULL,
    CONSTRAINT quartos_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT quartos_fkey2 FOREIGN KEY (id)
        REFERENCES tipoQuarto (id) MATCH SIMPLE,
    CONSTRAINT quartos_pkey PRIMARY KEY (nQrto,codHotel)
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
    CONSTRAINT estadias_fkey FOREIGN KEY (nRegistro)
        REFERENCES clientes (nRegistro) MATCH SIMPLE,
    CONSTRAINT estadias_fkey2 FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
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
    CONSTRAINT clientes_fkey FOREIGN KEY (nRegistro)
        REFERENCES clientes (nRegistro) MATCH SIMPLE,
    CONSTRAINT hoteis_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT reserva_pkey PRIMARY KEY (nRegistro,codHotel)
);

CREATE TABLE tipoQuarto
(
    id integer NOT NULL,
    nome varchar(100),
    camaExtra bool,
    CONSTRAINT tipoQuarto_pkey PRIMARY KEY (id)
);

CREATE TABLE limpeza
(
    dataLimpeza date,
    CONSTRAINT limpeza_fkey FOREIGN KEY (nQrto)
        REFERENCES quartos (nQrto) MATCH SIMPLE,
    CONSTRAINT limpeza_fkey FOREIGN KEY (codEmp)
        REFERENCES empregados (codEmp) MATCH SIMPLE,
    CONSTRAINT limpeza_pkey PRIMARY KEY (nQrto,codEmp)
);

CREATE TABLE oferece
(
    dataServico date,
    horaServico timestamp,
    CONSTRAINT oferece_fkey FOREIGN KEY (codS)
        REFERENCES servicos (codS) MATCH SIMPLE,
    CONSTRAINT oferece_fkey2 FOREIGN KEY (codEstadia)
        REFERENCES estadias (CodEstadia) MATCH SIMPLE,
    CONSTRAINT oferece_pkey PRIMARY KEY (codS,codEstadia)
);

CREATE TABLE preco
(
    valor money,
    CONSTRAINT preco_fkey FOREIGN KEY (codHotel)
        REFERENCES hoteis (codHotel) MATCH SIMPLE,
    CONSTRAINT preco_fkey2 FOREIGN KEY (id)
        REFERENCES tipoQuarto (id) MATCH SIMPLE,
    CONSTRAINT preco_pkey PRIMARY KEY (codHotel,id)
);