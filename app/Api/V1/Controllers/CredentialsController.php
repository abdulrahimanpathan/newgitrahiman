<?php

namespace App\Api\V1\Controllers;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\Book;
use Dingo\Api\Routing\Helpers;

use Illuminate\Http\Request;

class CredentialsController extends Controller
{
    use Helpers;
    public function index()
{
    $currentUser = JWTAuth::parseToken()->authenticate();
    $data = '[
  {
    "id": "1",
    "name": "Self Management",
    "slug": "self-management",
    "rgb": {
      "r": "253",
      "g": "181",
      "b": "21"
    },
    "hex": "#FDB515",
    "short_description": "Show how you work and learn independently, and take responsibility for personal actions.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/5/Self-Management-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/4/self_management.png"
  },
  {
    "id": "2",
    "name": "Digital Literacy",
    "slug": "digital-literacy",
    "rgb": {
      "r": "173",
      "g": "191",
      "b": "134"
    },
    "hex": "#ADBF86",
    "short_description": "Digital literacy is an essential skill for effective participation in today’s fast paced digital world with businesses relying on digital technology for all aspects of their operations.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/8/Digital-Literacy-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/7/digital_literacy.png"
  },
  {
    "id": "100",
    "name": "Teamwork",
    "slug": "teamwork",
    "rgb": {
      "r": "242",
      "g": "108",
      "b": "114"
    },
    "hex": "#F26C72",
    "short_description": "Teamwork is one of the most highly regarded employability skills and many organisations rely on successful teamwork to achieve organisational goals and objectives.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/18/Teamwork-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/17/teamwork.png"
  },
  {
    "id": "4",
    "name": "Communication",
    "slug": "communication",
    "rgb": {
      "r": "98",
      "g": "119",
      "b": "186"
    },
    "hex": "#6277BA",
    "short_description": "Communication is essential to promote commitment and the sharing of ideas and information within your team and across the organisation, external stakeholders and customers.\r\n",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/21/Communication-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/20/communication.png"
  },
  {
    "id": "9",
    "name": "Problem Solving",
    "slug": "problem-solving",
    "rgb": {
      "r": "212",
      "g": "63",
      "b": "61"
    },
    "hex": "#D43F3D",
    "short_description": "Problem solving is an essential part of business today as it involves the ability to define and analyse problems, identify problem severity and implement optimal solutions.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/24/problem_solving.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/23/Problem-Solving-icon.png"
  },
  {
    "id": "8",
    "name": "Critical Thinking",
    "slug": "critical-thinking",
    "rgb": {
      "r": "243",
      "g": "111",
      "b": "33"
    },
    "hex": "#F36F21",
    "short_description": "Critical thinking is essential to analyse a situation or problem, identify causal relationships and generate an optimal solution.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/76/Critical-Thinking-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/26/critical_thinking.png"
  },
  {
    "id": "6",
    "name": "Emotional Judgement",
    "slug": "emotional-judgement",
    "rgb": {
      "r": "185",
      "g": "106",
      "b": "171"
    },
    "hex": "#B96AAB",
    "short_description": "Emotional judgement is essential in navigating social networks, and influencing and inspiring others.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/30/Emotional-Awareness-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/29/emotional_judgement.png"
  },
  {
    "id": "10",
    "name": "Global Citizenship",
    "slug": "global-citizenship",
    "rgb": {
      "r": "53",
      "g": "174",
      "b": "114"
    },
    "hex": "#35AE72",
    "short_description": "Global citizenship is essential in understanding your professional responsibilities in an increasingly diverse  global economy and society.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/33/Global-Citizenship-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/32/global_citizenship.png"
  },
  {
    "id": "7",
    "name": "Innovation",
    "slug": "innovation",
    "rgb": {
      "r": "248",
      "g": "150",
      "b": "29"
    },
    "hex": "#F8961D",
    "short_description": "Innovation is essential for organisations to respond to future opportunities, embrace new uses of technologies and improve industry methods.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/36/Innovation-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/35/innovation.png"
  },
  {
    "id": "12",
    "name": "Professional Ethics",
    "slug": "professional-ethics",
    "rgb": {
      "r": "34",
      "g": "68",
      "b": "100"
    },
    "hex": "224464",
    "short_description": "Professional ethics encompasses the personal, organisational and corporate standard of behaviour expected of professionals.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/39/Professional-Ethics-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/38/professional_ethics.png"
  },
  {
    "id": "13",
    "name": "Digital Marketing",
    "slug": "digital-marketing",
    "rgb": {
      "r": "171",
      "g": "127",
      "b": "212"
    },
    "hex": "AB7FD4 ",
    "short_description": "The Digital Marketing Credential is essential to promote your ability to understand brands and consumers and build relationships between them through digital platforms and channels.\r\n\r\n",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/42/Digital-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/41/Digital-Marketing---Tile.png"
  },
  {
    "id": "15",
    "name": "Content Marketing",
    "slug": "content-marketing",
    "rgb": {
      "r": "223",
      "g": "26",
      "b": "34"
    },
    "hex": "DF1A22",
    "short_description": "The Content Marketing Credential is essential to promote your ability to create and deliver relevant and consistent content to engage with specific audiences.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/45/Content-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/44/Content-Marketing---Tile.png"
  },
  {
    "id": "14",
    "name": "Data-Driven Marketing",
    "slug": "data-driven-marketing",
    "rgb": {
      "r": "123",
      "g": "180",
      "b": "96"
    },
    "hex": null,
    "short_description": "The Data-Driven Marketing Credential is essential to promote your ability to transform consumer data into marketing insights to optimise the results of marketing investment",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/48/Data-Driven-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/47/Data-Driven-Marketing---Tile.png"
  },
  {
    "id": "16",
    "name": "Creative",
    "slug": "creative",
    "rgb": {
      "r": "255",
      "g": "221",
      "b": "0"
    },
    "hex": "FFDD00",
    "short_description": "The Creative Credential is essential to promote your ability to generate innovative ideas that are relevant to target audiences and differentiating in the market place to drive results – to create work that works.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/51/Creative-icon-Web.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/50/Creative---Tile.png"
  },
  {
    "id": "17",
    "name": "Data Analytics",
    "slug": "data-analytics",
    "rgb": {
      "r": "0",
      "g": "172",
      "b": "215"
    },
    "hex": "00ACD7",
    "short_description": "It is now recognised that an organisation’s future is entwined with its ability to effectively extract knowledge from data. Nations and organisations that will prosper in the future will be those with the analytics skill to unleash the power of data and therefore significantly optimise their decision-making. ",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/53/Data-Analytics-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/52/Data-Analytics---Tile copy.png"
  },
  {
    "id": "5",
    "name": "Collaboration",
    "slug": "collaboration",
    "rgb": {
      "r": "123",
      "g": "98",
      "b": "170"
    },
    "hex": "#7B62AA",
    "short_description": "Collaboration is essential to share knowledge and solve problems, bringing together diverse talents to achieve workplace goals."
  }
]';

return json_decode($data, true);

}

public function credentials($id)
{
	//echo "hi";exit;
    $currentUser = JWTAuth::parseToken()->authenticate();

    $data = '[
  {
    "id": "1",
    "name": "Self Management",
    "slug": "self-management",
    "rgb": {
      "r": "253",
      "g": "181",
      "b": "21"
    },
    "hex": "#FDB515",
    "short_description": "Show how you work and learn independently, and take responsibility for personal actions.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/5/Self-Management-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/4/self_management.png"
  },
  {
    "id": "2",
    "name": "Digital Literacy",
    "slug": "digital-literacy",
    "rgb": {
      "r": "173",
      "g": "191",
      "b": "134"
    },
    "hex": "#ADBF86",
    "short_description": "Digital literacy is an essential skill for effective participation in today’s fast paced digital world with businesses relying on digital technology for all aspects of their operations.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/8/Digital-Literacy-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/7/digital_literacy.png"
  },
  {
    "id": "100",
    "name": "Teamwork",
    "slug": "teamwork",
    "rgb": {
      "r": "242",
      "g": "108",
      "b": "114"
    },
    "hex": "#F26C72",
    "short_description": "Teamwork is one of the most highly regarded employability skills and many organisations rely on successful teamwork to achieve organisational goals and objectives.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/18/Teamwork-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/17/teamwork.png"
  },
  {
    "id": "4",
    "name": "Communication",
    "slug": "communication",
    "rgb": {
      "r": "98",
      "g": "119",
      "b": "186"
    },
    "hex": "#6277BA",
    "short_description": "Communication is essential to promote commitment and the sharing of ideas and information within your team and across the organisation, external stakeholders and customers.\r\n",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/21/Communication-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/20/communication.png"
  },
  {
    "id": "9",
    "name": "Problem Solving",
    "slug": "problem-solving",
    "rgb": {
      "r": "212",
      "g": "63",
      "b": "61"
    },
    "hex": "#D43F3D",
    "short_description": "Problem solving is an essential part of business today as it involves the ability to define and analyse problems, identify problem severity and implement optimal solutions.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/24/problem_solving.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/23/Problem-Solving-icon.png"
  },
  {
    "id": "8",
    "name": "Critical Thinking",
    "slug": "critical-thinking",
    "rgb": {
      "r": "243",
      "g": "111",
      "b": "33"
    },
    "hex": "#F36F21",
    "short_description": "Critical thinking is essential to analyse a situation or problem, identify causal relationships and generate an optimal solution.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/76/Critical-Thinking-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/26/critical_thinking.png"
  },
  {
    "id": "6",
    "name": "Emotional Judgement",
    "slug": "emotional-judgement",
    "rgb": {
      "r": "185",
      "g": "106",
      "b": "171"
    },
    "hex": "#B96AAB",
    "short_description": "Emotional judgement is essential in navigating social networks, and influencing and inspiring others.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/30/Emotional-Awareness-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/29/emotional_judgement.png"
  },
  {
    "id": "10",
    "name": "Global Citizenship",
    "slug": "global-citizenship",
    "rgb": {
      "r": "53",
      "g": "174",
      "b": "114"
    },
    "hex": "#35AE72",
    "short_description": "Global citizenship is essential in understanding your professional responsibilities in an increasingly diverse  global economy and society.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/33/Global-Citizenship-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/32/global_citizenship.png"
  },
  {
    "id": "7",
    "name": "Innovation",
    "slug": "innovation",
    "rgb": {
      "r": "248",
      "g": "150",
      "b": "29"
    },
    "hex": "#F8961D",
    "short_description": "Innovation is essential for organisations to respond to future opportunities, embrace new uses of technologies and improve industry methods.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/36/Innovation-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/35/innovation.png"
  },
  {
    "id": "12",
    "name": "Professional Ethics",
    "slug": "professional-ethics",
    "rgb": {
      "r": "34",
      "g": "68",
      "b": "100"
    },
    "hex": "224464",
    "short_description": "Professional ethics encompasses the personal, organisational and corporate standard of behaviour expected of professionals.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/39/Professional-Ethics-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/38/professional_ethics.png"
  },
  {
    "id": "13",
    "name": "Digital Marketing",
    "slug": "digital-marketing",
    "rgb": {
      "r": "171",
      "g": "127",
      "b": "212"
    },
    "hex": "AB7FD4 ",
    "short_description": "The Digital Marketing Credential is essential to promote your ability to understand brands and consumers and build relationships between them through digital platforms and channels.\r\n\r\n",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/42/Digital-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/41/Digital-Marketing---Tile.png"
  },
  {
    "id": "15",
    "name": "Content Marketing",
    "slug": "content-marketing",
    "rgb": {
      "r": "223",
      "g": "26",
      "b": "34"
    },
    "hex": "DF1A22",
    "short_description": "The Content Marketing Credential is essential to promote your ability to create and deliver relevant and consistent content to engage with specific audiences.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/45/Content-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/44/Content-Marketing---Tile.png"
  },
  {
    "id": "14",
    "name": "Data-Driven Marketing",
    "slug": "data-driven-marketing",
    "rgb": {
      "r": "123",
      "g": "180",
      "b": "96"
    },
    "hex": null,
    "short_description": "The Data-Driven Marketing Credential is essential to promote your ability to transform consumer data into marketing insights to optimise the results of marketing investment",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/48/Data-Driven-Marketing-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/47/Data-Driven-Marketing---Tile.png"
  },
  {
    "id": "16",
    "name": "Creative",
    "slug": "creative",
    "rgb": {
      "r": "255",
      "g": "221",
      "b": "0"
    },
    "hex": "FFDD00",
    "short_description": "The Creative Credential is essential to promote your ability to generate innovative ideas that are relevant to target audiences and differentiating in the market place to drive results – to create work that works.",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/51/Creative-icon-Web.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/50/Creative---Tile.png"
  },
  {
    "id": "17",
    "name": "Data Analytics",
    "slug": "data-analytics",
    "rgb": {
      "r": "0",
      "g": "172",
      "b": "215"
    },
    "hex": "00ACD7",
    "short_description": "It is now recognised that an organisation’s future is entwined with its ability to effectively extract knowledge from data. Nations and organisations that will prosper in the future will be those with the analytics skill to unleash the power of data and therefore significantly optimise their decision-making. ",
    "icon": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/53/Data-Analytics-icon.png",
    "tile": "https://s3-ap-southeast-2.amazonaws.com/deakindigital-api/files/52/Data-Analytics---Tile copy.png"
  },
  {
    "id": "5",
    "name": "Collaboration",
    "slug": "collaboration",
    "rgb": {
      "r": "123",
      "g": "98",
      "b": "170"
    },
    "hex": "#7B62AA",
    "short_description": "Collaboration is essential to share knowledge and solve problems, bringing together diverse talents to achieve workplace goals."
  }
]';

$json = json_decode($data);
foreach($json as $item)
{
    if($item->id == $id)
    {
        $result['id'] = $item->id;
        $result['name'] = $item->name;
        $result['slug'] = $item->slug;
        $result['rgb'] = $item->rgb;
        $result['hex'] = $item->hex;
        $result['short_description'] = $item->short_description;
        $result['icon'] = addslashes($item->icon);
        $result['tile'] = $item->tile;
        return json_encode($result);
    }
}



}




}
