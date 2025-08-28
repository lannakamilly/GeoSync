const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        function setTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            if(theme === 'dark') {
                themeIcon.textContent = '☀️';
                themeToggle.querySelector('span:last-child').textContent = 'Escuro';
            } else {
                themeIcon.textContent = '🌙';
                themeToggle.querySelector('span:last-child').textContent = 'Claro';
            }
        }
        themeToggle.onclick = () => {
            const current = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            setTheme(current);
        };
        // Inicializa tema
        setTheme('light');

        // Mapa Leaflet
        var map = L.map('map').setView([-23.5411, -46.6416], 15);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap'
        }).addTo(map);
        var marker = L.marker([-23.5411, -46.6416]).addTo(map);
        var circle = L.circle([-23.5411, -46.6416], {radius: 30, color: '#b1005a', fillColor: '#b1005a', fillOpacity: 0.2}).addTo(map);

// import React from "react";
// import { Link, useLocation } from "react-router-dom";
// import { createPageUrl } from "@/utils";
// import { 
//   MapPin, 
//   History, 
//   Settings, 
//   Bell, 
//   Wifi, 
//   WifiOff,
//   Battery,
//   Shield
// } from "lucide-react";
// import {
//   Sidebar,
//   SidebarContent,
//   SidebarGroup,
//   SidebarGroupContent,
//   SidebarGroupLabel,
//   SidebarMenu,
//   SidebarMenuButton,
//   SidebarMenuItem,
//   SidebarHeader,
//   SidebarFooter,
//   SidebarProvider,
//   SidebarTrigger,
// } from "@/components/ui/sidebar";
// import { Badge } from "@/components/ui/badge";

// const navigationItems = [
//   {
//     title: "Rastreamento",
//     url: createPageUrl("Dashboard"),
//     icon: MapPin,
//     color: "text-blue-600",
//   },
//   {
//     title: "Histórico",
//     url: createPageUrl("History"),
//     icon: History,
//     color: "text-green-600",
//   },
//   {
//     title: "Alertas",
//     url: createPageUrl("Alerts"),
//     icon: Bell,
//     color: "text-orange-600",
//   },
//   {
//     title: "Configurações",
//     url: createPageUrl("Settings"),
//     icon: Settings,
//     color: "text-gray-600",
//   },
// ];

// export default function Layout({ children, currentPageName }) {
//   const location = useLocation();

//   return (
//     <SidebarProvider>
//       <div className="min-h-screen flex w-full bg-gradient-to-br from-slate-50 to-blue-50">
//         <style>
//           {`
//             :root {
//               --primary-blue: #1e40af;
//               --secondary-blue: #3b82f6;
//               --accent-blue: #60a5fa;
//               --dark-slate: #1e293b;
//               --light-slate: #f8fafc;
//             }
//           `}
//         </style>
        
//         <Sidebar className="border-r border-slate-200 bg-white/80 backdrop-blur-sm">
//           <SidebarHeader className="border-b border-slate-200 p-6">
//             <div className="flex items-center gap-3">
//               <div className="relative">
//                 <div className="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center shadow-lg">
//                   <MapPin className="w-6 h-6 text-white" />
//                 </div>
//                 <div className="absolute -top-1 -right-1 w-4 h-4 bg-green-400 rounded-full border-2 border-white shadow-sm">
//                   <Wifi className="w-2 h-2 text-white mx-auto mt-0.5" />
//                 </div>
//               </div>
//               <div>
//                 <h2 className="font-bold text-slate-900 text-lg">GPS Tracker</h2>
//                 <p className="text-sm text-slate-500">Mochila Inteligente</p>
//               </div>
//             </div>
//           </SidebarHeader>
          
//           <SidebarContent className="p-4">
//             <SidebarGroup>
//               <SidebarGroupLabel className="text-xs font-semibold text-slate-500 uppercase tracking-wider px-3 py-2">
//                 Navegação
//               </SidebarGroupLabel>
//               <SidebarGroupContent>
//                 <SidebarMenu>
//                   {navigationItems.map((item) => (
//                     <SidebarMenuItem key={item.title}>
//                       <SidebarMenuButton 
//                         asChild 
//                         className={`hover:bg-blue-50 hover:text-blue-700 transition-all duration-300 rounded-xl mb-1 ${
//                           location.pathname === item.url 
//                             ? 'bg-blue-50 text-blue-700 shadow-sm border border-blue-100' 
//                             : 'text-slate-600'
//                         }`}
//                       >
//                         <Link to={item.url} className="flex items-center gap-3 px-4 py-3">
//                           <item.icon className={`w-5 h-5 ${item.color}`} />
//                           <span className="font-medium">{item.title}</span>
//                         </Link>
//                       </SidebarMenuButton>
//                     </SidebarMenuItem>
//                   ))}
//                 </SidebarMenu>
//               </SidebarGroupContent>
//             </SidebarGroup>

//             <SidebarGroup>
//               <SidebarGroupLabel className="text-xs font-semibold text-slate-500 uppercase tracking-wider px-3 py-2">
//                 Status do Sistema
//               </SidebarGroupLabel>
//               <SidebarGroupContent>
//                 <div className="px-4 py-3 space-y-3">
//                   <div className="flex items-center justify-between">
//                     <div className="flex items-center gap-2">
//                       <Wifi className="w-4 h-4 text-green-500" />
//                       <span className="text-sm text-slate-600">Conectado</span>
//                     </div>
//                     <Badge className="bg-green-100 text-green-700 border-green-200">Online</Badge>
//                   </div>
//                   <div className="flex items-center justify-between">
//                     <div className="flex items-center gap-2">
//                       <Battery className="w-4 h-4 text-blue-500" />
//                       <span className="text-sm text-slate-600">Bateria</span>
//                     </div>
//                     <Badge className="bg-blue-100 text-blue-700 border-blue-200">85%</Badge>
//                   </div>
//                   <div className="flex items-center justify-between">
//                     <div className="flex items-center gap-2">
//                       <Shield className="w-4 h-4 text-purple-500" />
//                       <span className="text-sm text-slate-600">Zona Segura</span>
//                     </div>
//                     <Badge className="bg-purple-100 text-purple-700 border-purple-200">Ativa</Badge>
//                   </div>
//                 </div>
//               </SidebarGroupContent>
//             </SidebarGroup>
//           </SidebarContent>

//           <SidebarFooter className="border-t border-slate-200 p-4">
//             <div className="flex items-center gap-3">
//               <div className="w-10 h-10 bg-gradient-to-br from-slate-400 to-slate-600 rounded-full flex items-center justify-center">
//                 <span className="text-white font-semibold text-sm">U</span>
//               </div>
//               <div className="flex-1 min-w-0">
//                 <p className="font-medium text-slate-900 text-sm truncate">Usuário</p>
//                 <p className="text-xs text-slate-500 truncate">Dispositivo: GY-PGSS6MV2</p>
//               </div>
//             </div>
//           </SidebarFooter>
//         </Sidebar>

//         <main className="flex-1 flex flex-col overflow-hidden">
//           {/* Header Mobile */}
//           <header className="bg-white/80 backdrop-blur-sm border-b border-slate-200 px-6 py-4 md:hidden">
//             <div className="flex items-center gap-4">
//               <SidebarTrigger className="hover:bg-slate-100 p-2 rounded-lg transition-colors duration-200" />
//               <h1 className="text-xl font-bold text-slate-900">GPS Tracker</h1>
//             </div>
//           </header>

//           {/* Main Content */}
//           <div className="flex-1 overflow-auto">
//             {children}
//           </div>
//         </main>
//       </div>
//     </SidebarProvider>
//   );
// }