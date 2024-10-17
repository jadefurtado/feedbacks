<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    public function run(): void
    {
        $feedbacks = [
            [
                'name' => 'Ana Souza',
                'email' => 'ana@example.com',
                'message' => 'Seria ótimo ter uma opção de filtro para os produtos na loja. Isso facilitaria muito a busca!',

            ],
            [
                'name' => 'Carlos Oliveira',
                'email' => 'carlos@example.com',
                'message' => 'Estou muito insatisfeito com o atendimento ao cliente. Esperava uma resposta mais rápida para minha dúvida.',
                'category' => 'reclamação',  
            ],
            [
                'name' => 'Beatriz Lima',
                'email' => 'beatriz@example.com',
                'message' => 'Adorei a nova funcionalidade do aplicativo! Está muito mais fácil de usar e intuitivo.',
                'category' => 'elogio'
            ],
            [
                'name' => 'João Pereira',
                'email' => 'joao@example.com',
                'message' => 'Poderíamos ter um programa de fidelidade para clientes frequentes. Acho que seria um grande incentivo!',
                'category' => 'sugestão'
            ],
            [
                'name' => 'Fernanda Costa',
                'email' => 'fernanda@example.com',
                'message' => 'A qualidade do produto que recebi não correspondeu às minhas expectativas. Precisa melhorar.',
                'category' => 'reclamação'
            ],
            [
                'name' => 'Lucas Martins',
                'email' => 'lucas@example.com',
                'message' => 'O evento foi incrível! Parabéns pela organização e pela escolha dos palestrantes.',
                'category' => 'elogio'
            ],
            [
                'name' => 'Camila Almeida',
                'email' => 'camila@example.com',
                'message' => 'Seria legal ter mais opções de pagamento na plataforma. Assim, mais pessoas poderiam utilizar.',
                'category' => 'sugestão'
            ],
            [
                'name' => 'Ricardo Santos',
                'email' => 'ricardo@example.com',
                'message' => 'O serviço de entrega atrasou bastante. Espero que isso não aconteça novamente.',
                'category' => 'reclamação'
            ],
            [
                'name' => 'Juliana Rocha',
                'email' => 'juliana@example.com',
                'message' => 'Fiquei impressionada com a qualidade do atendimento que recebi na loja. Continuem assim!',
                'category' => 'elogio'
            ],
            [
                'name' => 'Felipe Nascimento',
                'email' => 'felipe@example.com',
                'message' => 'Poderíamos ter um canal de feedback mais acessível, como um formulário na página principal.',
                'category' => 'sugestão'
            ],
        ];

        foreach ($feedbacks as $feedback) {
            Feedback::create($feedback);
        }
    }
}
