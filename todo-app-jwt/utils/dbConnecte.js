import mongoose from "mongoose";

const DATABASE_URL = precess.env.DATABASE_URL;

//verificação
if (!DATABASE_URL) {
    throw new Error("Por favor, defina a varaável DATABASE_URL no arquivo .env.local");

}

const connectMongo = async()=>{ 
                mongoose.connect(DATABASE_URL)
                    .then("Conectado com Mongo")
                    .catch(err => console.error("Erro ao conectar com Mongo", err));
}
export default connectMongo;