<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            [
                'name' => 'Red Bull Racing',
                'country' => 'Austria',
                'principal' => 'Christian Horner',
                'logo' => 'https://brandlogo.org/wp-content/uploads/2024/04/Oracle-Red-Bull-Racing-Logo.png',
                'description' => 'Equipo campeón con gran enfoque en el desarrollo aerodinámico.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Mercedes-AMG Petronas F1 Team',
                'country' => 'Germany',
                'principal' => 'Toto Wolff',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Mercedes_AMG_Petronas_F1_Logo.svg/2560px-Mercedes_AMG_Petronas_F1_Logo.svg.png',
                'description' => 'Equipo alemán de Fórmula 1 dominador en la era híbrida.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Scuderia Ferrari',
                'country' => 'Italy',
                'principal' => 'Frédéric Vasseur',
                'logo' => 'https://images.seeklogo.com/logo-png/5/2/ferrari-logo-png_seeklogo-53764.png',
                'description' => 'El equipo más antiguo de F1, símbolo de la historia del automovilismo.',
                'competition_id' => 1,
            ],
            [
                'name' => 'McLaren F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Andrea Stella',
                'logo' => 'https://mycarsfirst.com/img/cms/McLaren-F1Team-Rev.png',
                'description' => 'Equipo británico histórico con múltiples campeonatos.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Aston Martin Aramco F1 Team',
                'country' => 'United Kingdom',
                'principal' => 'Mike Krack',
                'logo' => 'https://images.seeklogo.com/logo-png/48/2/aston-martin-cognizant-formula-one-team-logo-png_seeklogo-485764.png',
                'description' => 'Equipo con fuerte inversión reciente y grandes ambiciones.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Alpine F1 Team',
                'country' => 'France',
                'principal' => 'Bruno Famin',
                'logo' => 'https://brandlogos.net/wp-content/uploads/2022/08/alpine_f1_team-logo_brandlogos.net_epph5-512x512.png',
                'description' => 'Equipo de Renault con enfoque en rendimiento y desarrollo.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Williams Racing',
                'country' => 'United Kingdom',
                'principal' => 'James Vowles',
                'logo' => 'https://static.wikia.nocookie.net/logopedia/images/3/33/Williams_racing_logo_alt.png/revision/latest?cb=20240705113305',
                'description' => 'Histórico equipo británico en proceso de reconstrucción.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Stake F1 Team Kick Sauber',
                'country' => 'Switzerland',
                'principal' => 'Alessandro Alunni Bravi',
                'logo' => 'https://brandlogos.net/wp-content/uploads/2025/02/stake_f1_team_kick_sauber-logo_brandlogos.net_qpgut-512x449.png',
                'description' => 'Equipo suizo que prepara su transformación en Audi F1 Team.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Visa Cash App RB',
                'country' => 'Italy',
                'principal' => 'Laurent Mekies',
                'logo' => 'https://cdn.prod.website-files.com/61b372525d9e220633140352/65df7c39bce657df7423a0af_Visa_Cash_App_RB_team_logo.webp',
                'description' => 'Equipo filial de Red Bull con sede en Faenza.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Haas F1 Team',
                'country' => 'United States',
                'principal' => 'Ayao Komatsu',
                'logo' => 'https://cdn.worldvectorlogo.com/logos/haas-f1-team-logo.svg',
                'description' => 'Único equipo estadounidense de la parrilla, propiedad de Gene Haas.',
                'competition_id' => 1,
            ],
            [
                'name' => 'Ducati Lenovo Team',
                'country' => 'Italy',
                'principal' => 'Luigi Dall\'Igna',
                'logo' => 'https://images.seeklogo.com/logo-png/61/2/ducati-lenovo-logo-png_seeklogo-612337.png',
                'description' => 'Equipo oficial de Ducati, dominantes en las últimas temporadas.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Aprilia Racing',
                'country' => 'Italy',
                'principal' => 'Massimo Rivola',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Aprilia_Racing_Logo.svg/2560px-Aprilia_Racing_Logo.svg.png',
                'description' => 'Equipo de fábrica con una gran evolución reciente.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Monster Energy Yamaha MotoGP',
                'country' => 'Japan',
                'principal' => 'Lin Jarvis',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/6/64/Yamaha_motogp_team.png',
                'description' => 'Equipo de fábrica de Yamaha, campeones recientes.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Red Bull KTM Factory Racing',
                'country' => 'Austria',
                'principal' => 'Francesco Guidotti',
                'logo' => 'https://vectorise.net/logo/wp-content/uploads/2019/04/Logo-Red-Bull-KTM-Factory-Racing.png',
                'description' => 'Equipo oficial de KTM con fuerte desarrollo tecnológico.',
                'competition_id' => 2,
            ],
            [
                'name' => 'GASGAS Factory Racing Tech3',
                'country' => 'Spain',
                'principal' => 'Nicolas Goyon',
                'logo' => 'https://masterlap.com/modules/g_megamenu/image/IMAGENES-MARCAS-MENU-NUEVO-2021.png',
                'description' => 'Equipo vinculado a KTM, enfocado en jóvenes talentos.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Pramac Racing',
                'country' => 'Italy',
                'principal' => 'Gino Borsoi',
                'logo' => 'https://upload.wikimedia.org/wikipedia/it/7/7e/Pramac_Racing_logo.png',
                'description' => 'Equipo satélite de Ducati con gran rendimiento.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Gresini Racing MotoGP',
                'country' => 'Italy',
                'principal' => 'Nadia Padovani',
                'logo' => 'https://images.seeklogo.com/logo-png/61/2/gresini-racing-motogp-2025-logo-png_seeklogo-612334.png',
                'description' => 'Histórico equipo con motos Ducati, conocido por su espíritu independiente.',
                'competition_id' => 2,
            ],
            [
                'name' => 'VR46 Racing Team',
                'country' => 'Italy',
                'principal' => 'Alessio Salucci',
                'logo' => 'https://play-lh.googleusercontent.com/gf8_qXX3skcyPqURj_vY5FaRFdgQCtkPivYLdF0IoXaFeZMkF0bnMwta5Uk9v40ZrBU=w600-h300-pc0xffffff-pd',
                'description' => 'Equipo fundado por Valentino Rossi, usando motos Ducati.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Trackhouse Racing',
                'country' => 'United States',
                'principal' => 'Davide Brivio',
                'logo' => 'https://upload.wikimedia.org/wikipedia/en/d/d2/Trackhouse_Racing_Logo.png',
                'description' => 'Nuevo equipo en MotoGP que reemplaza a RNF, con motos Aprilia.',
                'competition_id' => 2,
            ],
            [
                'name' => 'LCR Honda',
                'country' => 'Monaco',
                'principal' => 'Lucio Cecchinello',
                'logo' => 'https://images.polepositiontravel.com/general/LCR-TEAM-HONDA-2020.png',
                'description' => 'Equipo independiente con motos Honda y gran trayectoria en MotoGP.',
                'competition_id' => 2,
            ],
            [
                'name' => 'Repsol Honda Team',
                'country' => 'Japan',
                'principal' => 'Alberto Puig',
                'logo' => 'https://www.communika.com.mx/wp-content/uploads/2022/11/Repsol_Honda_Team.png',
                'description' => 'Histórico equipo japonés, campeón con pilotos como Marc Márquez.',
                'competition_id' => 2,
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
