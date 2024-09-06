import User from "@/models/User";
import connectMongo from "@/utils/dbConnecte";
import { NextResponse } from "next/server";
//import bcrypt from 'bcrypt';

export async function POST(request) {
    const data = await request.json();
    await connectMongo();

    // const passwordHash = bcripty.hash(password, 10); // 10 é igual a uma chave, para um criar um padrão de senha
    // const user = new User({username, password: passwordHash});

    // Verifica se já existe um usuário com esse nome
    try {
        const user = await User.create(data);
    return NextResponse.json({success:true, data:user});
    } catch (error) {
        return NextResponse.json({success:false}, {status: 400});
    }
}