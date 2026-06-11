// Mock Product Database with Comfort Scores & In-Stock Quantities (AED Pricing for Dubai Wholesaler)
const mockProducts = [
  {
    id: 1,
    name: "Sovereign Ergonomic Task Chair",
    category: "Chairs",
    price: 349,
    originalPrice: 499,
    badge: "Best Seller",
    rating: 4.8,
    stockCount: 450,
    deliveryTime: "Next-Day",
    description: "Designed for standard layouts but engineered for deep lumbar support. High-density molded foam seat cushion wraps around you for a customized, home-like comfort during long hours.",
    features: ["Automatic Lumbar Adjustment", "Breathable Mesh Back", "Height-Adjustable Armrests", "Tilt-Lock Tension Control"],
    comfortRatings: { support: 95, breathability: 90, adjustment: 85 },
    dimensions: { height: "105 - 115 cm", width: "65 cm", depth: "60 cm", weightLimit: "135 kg" },
    iconColor: "var(--color-primary)",
    image: window.themeUrl + "/images/prod_sovereign_chair_1780577397204.png"
  },
  {
    id: 2,
    name: "Zenith Comfort Office Desk",
    category: "Desks",
    price: 449,
    originalPrice: 599,
    badge: "Direct Pricing",
    rating: 4.7,
    stockCount: 380,
    deliveryTime: "Next-Day",
    description: "A clean, minimalist desk that fits perfectly into modern home setups or open-plan offices. Solid frame construction with integrated cable tray, keeping your workspace clutter-free.",
    features: ["Heavy-Duty Steel Base", "Scratch-Resistant Melamine Top", "Integrated Cable Organizers", "Adjustable Leveling Glides"],
    comfortRatings: { support: 80, breathability: 70, adjustment: 90 },
    dimensions: { height: "75 cm", width: "120 cm", depth: "60 cm", weightLimit: "100 kg" },
    iconColor: "var(--color-secondary)",
    image: window.themeUrl + "/images/prod_zenith_desk_1780577410628.png"
  },
  {
    id: 3,
    name: "Titan Industrial Storage Shelving",
    category: "Shelves",
    price: 189,
    originalPrice: 249,
    badge: "Vast Stock",
    rating: 4.6,
    stockCount: 820,
    deliveryTime: "Next-Day",
    description: "High-capacity metal shelving perfect for files, warehouses, or office storage. Simple boltless assembly that takes under 15 minutes, offering solid structure at an unbeatable price.",
    features: ["Boltless Easy Assembly", "Industrial Steel Grade", "5 Adjustable Shelf Levels", "Moisture-Resistant Shelves"],
    comfortRatings: { support: 95, breathability: 60, adjustment: 75 },
    dimensions: { height: "180 cm", width: "90 cm", depth: "40 cm", weightLimit: "175 kg per shelf" },
    iconColor: "var(--color-accent)",
    image: window.themeUrl + "/images/prod_titan_shelf_1780577423430.png"
  },
  {
    id: 4,
    name: "Verdana Executive Lounge Armchair",
    category: "Home",
    price: 649,
    originalPrice: 899,
    badge: "Premium Feel",
    rating: 4.9,
    stockCount: 150,
    deliveryTime: "2-3 Days",
    description: "Bring home-like belonging to the office reception or workspace breakout area. Deep cushioning with micro-suede upholstery designed to make clients and employees feel instantly comfortable.",
    features: ["Solid Hardwood Frame", "Stain-Resistant Micro-Suede", "Double-Padded Cushioning", "Mid-Century Wooden Legs"],
    comfortRatings: { support: 98, breathability: 85, adjustment: 60 },
    dimensions: { height: "85 cm", width: "80 cm", depth: "75 cm", weightLimit: "150 kg" },
    iconColor: "var(--color-primary)",
    image: window.themeUrl + "/images/prod_verdana_armchair_1780577435931.png"
  },
  {
    id: 5,
    name: "Flexi-Fold Modular Meeting Table",
    category: "Desks",
    price: 599,
    originalPrice: 799,
    badge: "Modular",
    rating: 4.7,
    stockCount: 220,
    deliveryTime: "Next-Day",
    description: "Perfect for flexible offices and training rooms. Easily fold and roll them out of the way, or lock them together to create a giant collaborative workspace in seconds.",
    features: ["Flip-Top Space Saving Design", "Heavy-Duty Locking Casters", "Ganging Clips Included", "Impact-Resistant Edge Banding"],
    comfortRatings: { support: 85, breathability: 70, adjustment: 95 },
    dimensions: { height: "75 cm", width: "140 cm", depth: "70 cm", weightLimit: "120 kg" },
    iconColor: "var(--color-secondary)",
    image: window.themeUrl + "/images/prod_flexi_table_1780577448223.png"
  },
  {
    id: 6,
    name: "Aura Breathable Ergonomic Stool",
    category: "Chairs",
    price: 229,
    originalPrice: 299,
    badge: "Active Sitting",
    rating: 4.5,
    stockCount: 310,
    deliveryTime: "Next-Day",
    description: "Features a wobble base that prompts micro-movements, strengthening your core and keeping you energized. Ideal companion for height-adjustable standing desks.",
    features: ["Non-Slip Rubber Wobble Base", "Pneumatic Height Adjust", "High-Density Foam Saddle", "Compact Lightweight Design"],
    comfortRatings: { support: 75, breathability: 95, adjustment: 90 },
    dimensions: { height: "55 - 75 cm", width: "38 cm", depth: "38 cm", weightLimit: "110 kg" },
    iconColor: "var(--color-accent)",
    image: window.themeUrl + "/images/prod_aura_stool_1780643216576.png"
  },
  {
    id: 7,
    name: "Horizon Oak Home-Office Desk",
    category: "Home",
    price: 399,
    originalPrice: 549,
    badge: "Cozy Style",
    rating: 4.8,
    stockCount: 190,
    deliveryTime: "2-3 Days",
    description: "Bridges the gap between office functionality and home warmth. The natural grain surface is warm to the touch and comes with two drawers for tidy storage.",
    features: ["Natural Oak Veneer", "Dual Stationery Drawers", "Soft-Close Drawer Slides", "Integrated Cable Slot"],
    comfortRatings: { support: 85, breathability: 75, adjustment: 80 },
    dimensions: { height: "76 cm", width: "110 cm", depth: "55 cm", weightLimit: "90 kg" },
    iconColor: "var(--color-primary)",
    image: window.themeUrl + "/images/prod_horizon_desk_1780643228396.png"
  },
  {
    id: 8,
    name: "Metro Stackable Side Chair",
    category: "Chairs",
    price: 129,
    originalPrice: 179,
    badge: "Bulk Value",
    rating: 4.4,
    stockCount: 1200,
    deliveryTime: "Next-Day",
    description: "Simple, space-saving chairs that nest together perfectly. Perfect for breakrooms, seminar halls, or temporary event layouts where comfort is still required.",
    features: ["Stacks up to 10 Chairs High", "Flexible Polypropylene Shell", "Chrome-Plated Steel Legs", "Non-Marring Foot Glides"],
    comfortRatings: { support: 80, breathability: 85, adjustment: 50 },
    dimensions: { height: "78 cm", width: "48 cm", depth: "50 cm", weightLimit: "120 kg" },
    iconColor: "var(--color-secondary)",
    image: window.themeUrl + "/images/prod_metro_chair_1780643241235.png"
  },
  {
    id: 9,
    name: "Classic Catalog Bunk Bed",
    category: "Bunkbeds",
    price: 399,
    originalPrice: 499,
    badge: "Classic Choice",
    rating: 4.8,
    stockCount: 150,
    deliveryTime: "Next-Day",
    description: "Built for ultimate durability, this heavy-duty bunk bed features a reinforced frame perfect for commercial dormitories or robust home use.",
    features: ["Reinforced Construction", "Integrated Safety Rails", "Built-In Ladder", "High Weight Capacity"],
    comfortRatings: { support: 90, breathability: 100, adjustment: 20 },
    dimensions: { height: "165 cm", width: "95 cm", depth: "200 cm", weightLimit: "150 kg per bunk" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/09/bad-thegem-product-catalog.png"
  },
  {
    id: 10,
    name: "Sturdy Metal Bunk Bed (SHD)",
    category: "Bunkbeds",
    price: 429,
    originalPrice: 599,
    badge: "Industrial Grade",
    rating: 4.7,
    stockCount: 85,
    deliveryTime: "2-3 Days",
    description: "A strong, resilient metal bunk bed designed for heavy use. Brings traditional styling to any bedroom while maintaining exceptional structural integrity.",
    features: ["Solid Metal Frame", "Non-Toxic Finish", "Separable into Two Beds", "Slatted Mattress Support"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 40 },
    dimensions: { height: "170 cm", width: "100 cm", depth: "205 cm", weightLimit: "120 kg per bunk" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/02/SHD-2-3.jpg"
  },
  {
    id: 11,
    name: "Premium HPT Wood Bunk",
    category: "Bunkbeds",
    price: 549,
    originalPrice: 699,
    badge: "Premium Feel",
    rating: 4.9,
    stockCount: 120,
    deliveryTime: "Next-Day",
    description: "Maximize your room space with this sleek, premium bunk bed. Its classic profile fits perfectly in traditional rooms without feeling cramped.",
    features: ["Premium Wood Finish", "Quick and Easy Assembly", "Full-Length Guardrails", "No Box Spring Needed"],
    comfortRatings: { support: 80, breathability: 100, adjustment: 10 },
    dimensions: { height: "155 cm", width: "98 cm", depth: "198 cm", weightLimit: "100 kg per bunk" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/HPT2.jpg"
  },
  {
    id: 12,
    name: "Compact Bunk Bed (LK)",
    category: "Bunkbeds",
    price: 299,
    originalPrice: 399,
    badge: "Space Saver",
    rating: 4.5,
    stockCount: 210,
    deliveryTime: "Next-Day",
    description: "A compact solution for tight spaces. Ensures comfort and safety with a highly efficient footprint.",
    features: ["Space Saving Profile", "Sturdy Ladder", "Modern Design", "Secure Rails"],
    comfortRatings: { support: 75, breathability: 100, adjustment: 10 },
    dimensions: { height: "150 cm", width: "95 cm", depth: "190 cm", weightLimit: "90 kg per bunk" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/02/LK-2-3.jpg"
  },
  {
    id: 13,
    name: "Family Bunk Bed (FB)",
    category: "Bunkbeds",
    price: 599,
    originalPrice: 799,
    badge: "Top Rated",
    rating: 4.8,
    stockCount: 60,
    deliveryTime: "2-3 Days",
    description: "Ideal for family setups, offering enhanced space and robust support for growing kids or guests.",
    features: ["Family Size", "Enhanced Support", "Elegant Finish", "Easy Assembly"],
    comfortRatings: { support: 95, breathability: 100, adjustment: 30 },
    dimensions: { height: "160 cm", width: "120 cm", depth: "200 cm", weightLimit: "150 kg per bunk" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/FB-1-4.jpg"
  },
  {
    id: 14,
    name: "Space-Saver Bunk Bed (SK)",
    category: "Bunkbeds",
    price: 349,
    originalPrice: 449,
    badge: "Best Value",
    rating: 4.6,
    stockCount: 140,
    deliveryTime: "Next-Day",
    description: "Designed specifically to save space while providing maximum utility. Features a clean design that complements any decor.",
    features: ["Value Engineered", "Clean Design", "Durable Coating", "Integrated Storage Options"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 20 },
    dimensions: { height: "165 cm", width: "98 cm", depth: "195 cm", weightLimit: "110 kg per bunk" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/SK-2...jpg"
  },
  {
    id: 15,
    name: "LK-1 6-Leg Bed Frame",
    category: "Beds",
    price: 199,
    originalPrice: 299,
    badge: "Sturdy",
    rating: 4.8,
    stockCount: 150,
    deliveryTime: "Next-Day",
    description: "Features a reliable 6-leg support system for maximum stability.",
    features: ["6-Leg Support", "Durable Frame", "Minimalist Look", "Easy Setup"],
    comfortRatings: { support: 90, breathability: 100, adjustment: 20 },
    dimensions: { height: "35 cm", width: "150 cm", depth: "200 cm", weightLimit: "250 kg" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/LK-1（6腿-）.jpg"
  },
  {
    id: 16,
    name: "HK-1 Bed Frame",
    category: "Beds",
    price: 249,
    originalPrice: 349,
    badge: "Popular",
    rating: 4.7,
    stockCount: 120,
    deliveryTime: "2-3 Days",
    description: "A popular choice that seamlessly blends durability with a sleek profile.",
    features: ["Sleek Profile", "High Quality Steel", "Quiet Joints", "Scratch Resistant"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 10 },
    dimensions: { height: "30 cm", width: "140 cm", depth: "195 cm", weightLimit: "220 kg" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/HK-1（HK-3-拆）.jpg"
  },
  {
    id: 17,
    name: "GHF Standard Bed Frame",
    category: "Beds",
    price: 179,
    originalPrice: 249,
    badge: "Value Pack",
    rating: 4.5,
    stockCount: 200,
    deliveryTime: "Next-Day",
    description: "The standard in affordable, reliable bed frames for everyday use.",
    features: ["Standard Layout", "Budget Friendly", "Reliable Support", "Fast Assembly"],
    comfortRatings: { support: 80, breathability: 100, adjustment: 10 },
    dimensions: { height: "35 cm", width: "140 cm", depth: "190 cm", weightLimit: "200 kg" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/GHF.jpg"
  },
  {
    id: 18,
    name: "HF Platform Bed",
    category: "Beds",
    price: 289,
    originalPrice: 399,
    badge: "Modern",
    rating: 4.9,
    stockCount: 85,
    deliveryTime: "Next-Day",
    description: "A sleek platform bed designed to offer excellent support without needing a box spring.",
    features: ["Platform Design", "No Box Spring Needed", "Modern Look", "Sturdy Frame"],
    comfortRatings: { support: 95, breathability: 100, adjustment: 10 },
    dimensions: { height: "40 cm", width: "160 cm", depth: "200 cm", weightLimit: "280 kg" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/HF.jpg"
  },
  {
    id: 19,
    name: "F-38 Metal Bed Frame",
    category: "Beds",
    price: 219,
    originalPrice: 299,
    badge: "Heavy Duty",
    rating: 4.6,
    stockCount: 160,
    deliveryTime: "Next-Day",
    description: "Constructed with heavy-duty metal for those who require ultimate frame strength.",
    features: ["Heavy Duty Metal", "Industrial Style", "Reinforced Joints", "High Capacity"],
    comfortRatings: { support: 90, breathability: 100, adjustment: 15 },
    dimensions: { height: "35 cm", width: "150 cm", depth: "200 cm", weightLimit: "300 kg" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/F-38.jpg"
  },
  {
    id: 20,
    name: "SHD Sturdy Bed",
    category: "Beds",
    price: 349,
    originalPrice: 499,
    badge: "Premium",
    rating: 4.8,
    stockCount: 65,
    deliveryTime: "2-3 Days",
    description: "Our premium sturdy bed frame that delivers uncompromised support and aesthetic appeal.",
    features: ["Premium Build", "Uncompromised Support", "Elegant Finish", "Long Lasting"],
    comfortRatings: { support: 95, breathability: 100, adjustment: 25 },
    dimensions: { height: "45 cm", width: "180 cm", depth: "200 cm", weightLimit: "350 kg" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/SHD-1-1-3.jpg"
  },
  {
    id: 21,
    name: "LK-3 Minimalist Bed",
    category: "Beds",
    price: 189,
    originalPrice: 259,
    badge: "Minimalist",
    rating: 4.7,
    stockCount: 190,
    deliveryTime: "Next-Day",
    description: "A minimalist bed frame that beautifully complements any modern, uncluttered bedroom.",
    features: ["Clean Lines", "Minimalist Profile", "Easy to Move", "Quick Setup"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 10 },
    dimensions: { height: "30 cm", width: "140 cm", depth: "190 cm", weightLimit: "200 kg" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/LK-3.jpg"
  },
  {
    id: 22,
    name: "Classic Metal Frame",
    category: "Beds",
    price: 229,
    originalPrice: 329,
    badge: "Classic",
    rating: 4.6,
    stockCount: 140,
    deliveryTime: "Next-Day",
    description: "A classic metal frame with a timeless design that fits effortlessly into any room.",
    features: ["Timeless Design", "Metal Construction", "Powder Coated", "Reliable"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 20 },
    dimensions: { height: "35 cm", width: "150 cm", depth: "200 cm", weightLimit: "250 kg" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/02/resize-500x500-15.jpg"
  },
  {
    id: 23,
    name: "WB-3C Wood/Metal Bed",
    category: "Beds",
    price: 399,
    originalPrice: 549,
    badge: "Hybrid",
    rating: 4.9,
    stockCount: 80,
    deliveryTime: "2-3 Days",
    description: "A stunning hybrid bed that combines the warmth of wood with the durability of metal.",
    features: ["Wood & Metal", "Stunning Contrast", "Hybrid Support", "Premium Finish"],
    comfortRatings: { support: 90, breathability: 100, adjustment: 30 },
    dimensions: { height: "40 cm", width: "160 cm", depth: "200 cm", weightLimit: "280 kg" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2019/12/WB-3C.jpg"
  },
  {
    id: 24,
    name: "WB-3A Premium Bed",
    category: "Beds",
    price: 459,
    originalPrice: 649,
    badge: "Top Rated",
    rating: 4.9,
    stockCount: 50,
    deliveryTime: "2-3 Days",
    description: "The pinnacle of our bed frame collection, offering luxurious design and rock-solid support.",
    features: ["Luxurious Design", "Rock-Solid Build", "Elite Materials", "Master Craftsmanship"],
    comfortRatings: { support: 98, breathability: 100, adjustment: 40 },
    dimensions: { height: "45 cm", width: "180 cm", depth: "200 cm", weightLimit: "350 kg" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2019/12/WB-3A.jpg"
  },
  {
    id: 25,
    name: "XG Home Shelf",
    category: "Home Shelves",
    price: 129,
    originalPrice: 199,
    badge: "New",
    rating: 4.8,
    stockCount: 150,
    deliveryTime: "Next-Day",
    description: "A versatile shelving unit designed to blend beautifully with home decor.",
    features: ["Versatile Use", "Elegant Design", "Easy Assembly", "Sturdy Build"],
    comfortRatings: { support: 80, breathability: 100, adjustment: 20 },
    dimensions: { height: "180 cm", width: "80 cm", depth: "35 cm", weightLimit: "100 kg per shelf" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/XG.jpg"
  },
  {
    id: 26,
    name: "TGD-5 Steel Shelf",
    category: "Home Shelves",
    price: 189,
    originalPrice: 249,
    badge: "Heavy Duty",
    rating: 4.7,
    stockCount: 120,
    deliveryTime: "2-3 Days",
    description: "Built with heavy-duty steel, this shelf provides unmatched support for heavy items.",
    features: ["Heavy Duty Steel", "Industrial Grade", "Multiple Tiers", "Rust Resistant"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 30 },
    dimensions: { height: "200 cm", width: "100 cm", depth: "40 cm", weightLimit: "150 kg per shelf" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/TGD-5.jpg"
  },
  {
    id: 27,
    name: "TGD-3 Open Shelf",
    category: "Home Shelves",
    price: 149,
    originalPrice: 199,
    badge: "Open Concept",
    rating: 4.6,
    stockCount: 80,
    deliveryTime: "Next-Day",
    description: "An open concept shelf perfect for displaying books, art, and plants.",
    features: ["Open Design", "Sleek Look", "Multi-Purpose", "Sturdy Frame"],
    comfortRatings: { support: 80, breathability: 100, adjustment: 20 },
    dimensions: { height: "150 cm", width: "90 cm", depth: "35 cm", weightLimit: "100 kg per shelf" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/TGD-3-开.jpg"
  },
  {
    id: 28,
    name: "WG Multi-Tier Shelf",
    category: "Home Shelves",
    price: 199,
    originalPrice: 299,
    badge: "High Capacity",
    rating: 4.8,
    stockCount: 90,
    deliveryTime: "Next-Day",
    description: "Maximize your storage with this highly adaptable multi-tier shelving system.",
    features: ["High Capacity", "Adjustable Shelves", "Clean Finish", "Space Saving"],
    comfortRatings: { support: 90, breathability: 100, adjustment: 40 },
    dimensions: { height: "190 cm", width: "120 cm", depth: "40 cm", weightLimit: "120 kg per shelf" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/WG-2-3-4-.jpg"
  },
  {
    id: 29,
    name: "WG 2-Tier Shelf",
    category: "Home Shelves",
    price: 89,
    originalPrice: 129,
    badge: "Compact",
    rating: 4.5,
    stockCount: 200,
    deliveryTime: "Next-Day",
    description: "A compact 2-tier shelf suitable for smaller spaces and quick organization.",
    features: ["Compact Size", "2 Tiers", "Lightweight", "Quick Setup"],
    comfortRatings: { support: 75, breathability: 100, adjustment: 10 },
    dimensions: { height: "80 cm", width: "80 cm", depth: "30 cm", weightLimit: "80 kg per shelf" },
    iconColor: "var(--color-secondary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/WG-2-.jpg"
  },
  {
    id: 30,
    name: "TG-4 Display Shelf",
    category: "Home Shelves",
    price: 159,
    originalPrice: 219,
    badge: "Elegant",
    rating: 4.7,
    stockCount: 65,
    deliveryTime: "2-3 Days",
    description: "An elegantly designed display shelf that turns storage into a showcase.",
    features: ["Elegant Display", "Glass or Wood Tiers", "Solid Structure", "Modern Appeal"],
    comfortRatings: { support: 85, breathability: 100, adjustment: 20 },
    dimensions: { height: "160 cm", width: "85 cm", depth: "35 cm", weightLimit: "90 kg per shelf" },
    iconColor: "var(--color-accent)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/TG-4.jpg"
  },
  {
    id: 31,
    name: "TG-6 Tall Shelf",
    category: "Home Shelves",
    price: 219,
    originalPrice: 289,
    badge: "Premium",
    rating: 4.9,
    stockCount: 45,
    deliveryTime: "Next-Day",
    description: "A tall, commanding shelving unit providing maximum vertical storage.",
    features: ["Tall Design", "Maximum Storage", "Premium Materials", "Secure Mounting"],
    comfortRatings: { support: 95, breathability: 100, adjustment: 30 },
    dimensions: { height: "220 cm", width: "95 cm", depth: "40 cm", weightLimit: "130 kg per shelf" },
    iconColor: "var(--color-primary)",
    image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/TG-6.jpg"
  }
];

// Automatically assign storeType based on category
mockProducts.forEach(p => {
  // If the product is assigned "Beds" or "Normal Beds" we treat it as Home.
  // Home Shelves specifically created so they do not overlap with office Shelves.
  if (p.category === 'Beds') p.category = 'Normal Beds'; // Auto-rename Beds to Normal Beds
  if (['Normal Beds', 'Bunkbeds', 'Home', 'Lounge', 'Home Shelves'].includes(p.category)) {
    p.storeType = 'home';
  } else {
    p.storeType = 'office';
  }
});

// App State
let currentStore = localStorage.getItem('gw_store_type') || 'office';
let cart = [];
let compareList = [];

// Store Categories Definition
const storeCategories = {
  'office': [
    { title: 'Premium Chairs', image: window.themeUrl + '/images/specialty_chair.png' },
    { title: 'Modern Desks', image: window.themeUrl + '/images/hero_office_home.png' },
    { title: 'Industrial Shelves', image: window.themeUrl + '/images/hero_premium_office.png' },
    { title: 'Executive Lounge', image: window.themeUrl + '/images/hero_office_home.png' }
  ],
  'home': [
    { title: 'Normal Beds', image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/LK-1（6腿-）.jpg" },
    { title: 'Bunkbeds', image: "https://greatwallfurnitures.com/wp-content/uploads/2020/02/SHD-2-3.jpg" },
    { title: 'Home Shelves', image: "https://greatwallfurnitures.com/wp-content/uploads/2020/03/XG.jpg" },
    { title: 'Home Essentials', image: window.themeUrl + '/images/hero_home_setup.png' }
  ]
};

// Store-specific Hero Content
const storeContent = {
  office: {
    heroSlides: [window.themeUrl + '/images/hero_premium_office.png', window.themeUrl + '/images/hero_warehouse.png', window.themeUrl + '/images/pano_large_office_final_1780576987747.png'],
    heroTitle: 'Command your workspace with unmatched comfort.',
    heroDesc: 'Equip your office with deeply comfortable, ergonomic, and highly functional furniture at unbeatable wholesale prices. Fast dispatch anywhere in Dubai.',
    logoText: 'Great Wall | Office',
    icon: '<i class="fa-solid fa-building"></i>'
  },
  home: {
    heroSlides: [window.themeUrl + '/images/hero_home_setup.png', window.themeUrl + '/images/product_bunk_bed_1780572574007.png', window.themeUrl + '/images/hero_furniture_showcase.png'],
    heroTitle: 'Transform your living space with cozy elegance.',
    heroDesc: 'Furnish your home with beautifully designed, ultra-comfortable pieces at unbeatable wholesale prices. Fast dispatch anywhere in Dubai.',
    logoText: 'Great Wall | Home',
    icon: '<i class="fa-solid fa-couch"></i>'
  }
};

const interactiveContent = {
  office: {
    tag: 'BEST SELLER',
    title: 'The Sovereign Ergonomic Task Chair',
    desc: 'Experience unparalleled comfort with our #1 best-selling ergonomic chair. Crafted from high-quality, durable materials, it perfectly blends premium aesthetics with advanced engineering. Designed for long hours, its premium feel transforms any workspace into a high-end executive environment.',
    features: ['Advanced Lumbar Engineering', 'Breathable High-Tension Mesh', 'Wholesale Bulk Pricing Availability'],
    btnText: 'Shop Office Chairs',
    embed: `<div class="sketchfab-embed-wrapper" style="width: 100%; height: 100%; position: relative;">
          <!-- Top Mask (Hide Author and Top Buttons completely) -->
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 80px; background: hsl(var(--color-bg-alt)); z-index: 10; pointer-events: none;"></div>
          <!-- Bottom Left Filter (Logo to Red) -->
          <div style="position: absolute; bottom: 0; left: 0; width: 60px; height: 60px; backdrop-filter: hue-rotate(163deg); z-index: 10; pointer-events: none;"></div>
          <!-- Bottom Right Filter (Buttons to Red) -->
          <div style="position: absolute; bottom: 0; right: 0; width: 150px; height: 60px; backdrop-filter: hue-rotate(163deg); z-index: 10; pointer-events: none;"></div>
          
          <iframe title="Office Chair" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/e0b8d8dfcf3c49119da650186df8779b/embed?autostart=1&preload=1&transparent=1&ui_theme=dark&ui_color=f23d42&ui_infos=0&ui_watermark=0&ui_settings=0&ui_help=0&ui_vr=0&ui_fullscreen=0&ui_animations=0" style="width: 100%; height: 450px;"> </iframe>
        </div>`
  },
  home: {
    tag: 'FAMILY FAVORITE',
    title: 'Heavy Duty Metal Bunkbed',
    desc: 'Maximize your room space without compromising on safety or comfort. Built with commercial-grade reinforced steel, this modern bunkbed is perfect for growing families, guest rooms, or shared living spaces.',
    features: ['Reinforced Steel Frame Construction', 'Integrated Safety Guardrails', 'Space-Saving Modern Design'],
    btnText: 'Shop Bunkbeds',
    embed: `<div class="sketchfab-embed-wrapper" style="width: 100%; height: 100%; position: relative;">
          <!-- Top Mask (Hide Author and Top Buttons completely) -->
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 80px; background: hsl(var(--color-bg-alt)); z-index: 10; pointer-events: none;"></div>
          <!-- Bottom Left Filter (Logo to Sage Green) -->
          <div style="position: absolute; bottom: 0; left: 0; width: 60px; height: 60px; backdrop-filter: hue-rotate(-60deg) saturate(40%); z-index: 10; pointer-events: none;"></div>
          <!-- Bottom Right Filter (Buttons to Sage Green) -->
          <div style="position: absolute; bottom: 0; right: 0; width: 150px; height: 60px; backdrop-filter: hue-rotate(-60deg) saturate(40%); z-index: 10; pointer-events: none;"></div>
          
          <iframe title="Metal Bunkbeds" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/8d98d0ea981f49ec95be0b94083abe55/embed?autostart=1&preload=1&transparent=1&ui_theme=dark&ui_color=4a6d53&ui_infos=0&ui_watermark=0&ui_settings=0&ui_help=0&ui_vr=0&ui_fullscreen=0&ui_animations=0" style="width: 100%; height: 450px;"> </iframe>
        </div>`
  }
};

const plannerContent = {
  office: {
    badge: 'Renovation Helper',
    title: 'Configure your new office layout instantly',
    desc: 'Tell us about your team setup and get an instant pricing layout for chairs, desks, and shelves with next-day shipping.',
    sizeLabel: 'Approximate Office Space Size',
    sizeOptions: [
      {val: 'small', text: 'Home Office / Micro Setup (1-2 people)'},
      {val: 'medium', text: 'Small Office Room (3-6 people)', selected: true},
      {val: 'large', text: 'Medium-Large Office (7-15 people)'}
    ],
    countLabel: 'Number of Workstations (Staff Count)',
    focusLabel: 'Primary Layout Requirement',
    focusOptions: [
      {val: 'comfort', text: 'Maximum Cushioning & Lumbar Adjustability', selected: true},
      {val: 'budget', text: 'Simple Workstations & Maximum Value'},
      {val: 'balanced', text: 'Balanced Comfort & Value'}
    ],
    resultsTitle: 'Suggested Transition Bundle',
    resultsDesc: 'Designed to provide matching home-office comfort and maximum workflow efficiency.',
    panoImages: {
      small: window.themeUrl + "/images/pano_small_office_1780574042953.png",
      medium: window.themeUrl + "/images/pano_medium_office_1780574059645.png",
      large: window.themeUrl + "/images/pano_large_office_final_1780576987747.png"
    }
  },
  home: {
    badge: 'Home Setup Helper',
    title: 'Configure your new living space instantly',
    desc: 'Tell us about your room setup and get an instant pricing layout for beds, shelves, and seating with next-day shipping.',
    sizeLabel: 'Approximate Room Size',
    sizeOptions: [
      {val: 'small', text: 'Small Bedroom / Studio (1-2 people)'},
      {val: 'medium', text: 'Master Bedroom / Guest Room (2-4 people)', selected: true},
      {val: 'large', text: 'Large Shared Room / Living Area (4+ people)'}
    ],
    countLabel: 'Number of Occupants',
    focusLabel: 'Primary Room Focus',
    focusOptions: [
      {val: 'comfort', text: 'Maximum Comfort & Premium Aesthetics', selected: true},
      {val: 'budget', text: 'Space-Saving Utility & Maximum Value'},
      {val: 'balanced', text: 'Balanced Comfort & Storage'}
    ],
    resultsTitle: 'Suggested Home Bundle',
    resultsDesc: 'Designed to provide maximum comfort, space-saving utility, and beautiful aesthetics.',
    panoImages: {
      small: window.themeUrl + "/images/hero_home_setup.png",
      medium: window.themeUrl + "/images/hero_furniture_showcase.png",
      large: window.themeUrl + "/images/pano_large_home_1780909951430.png"
    }
  }
};

// --- STOREFRONT LOGIC ---
function updateStorefrontState(store, animate = false) {
  const splash = document.getElementById('splash-screen');
  if (animate && splash) {
    // Show splash screen
    splash.classList.remove('hidden');
    
    setTimeout(() => {
      // Behind the splash screen, update everything and scroll to top
      applyStorefrontState(store);
      window.scrollTo({ top: 0, behavior: 'instant' });
      
      // Keep splash up for a moment to let things render and give cinematic feel
      setTimeout(() => {
        splash.classList.add('hidden');
      }, 500);
    }, 400); // Wait for CSS opacity transition to show splash fully
  } else {
    applyStorefrontState(store);
  }
}

function applyStorefrontState(store) {
  currentStore = store;
  localStorage.setItem('gw_store_type', store);
  
  // Update toggle buttons
  document.querySelectorAll('.store-toggle-btn').forEach(btn => {
    btn.classList.remove('active');
    if (btn.dataset.target === store) {
      btn.classList.add('active');
    }
  });
  
  // Update toggle backgrounds
  document.querySelectorAll('.store-toggle').forEach(container => {
    container.setAttribute('data-active', store);
  });
  
  // Trigger global CSS changes
  document.body.className = `store-${store}`;
  
  // Show welcome toast
  showToast(`Welcome to Great Wall | ${store === 'home' ? 'Home' : 'Office'}`, 'success');

  // Update Logo
  const logoTextEl = document.querySelector('.logo');
  if (logoTextEl) {
    logoTextEl.innerHTML = `
      <img src="${window.themeUrl}/images/logo_piloteer_transparent.png" alt="Piloteer Logo" style="height: 45px;">
      Great Wall<span>| ${store === 'home' ? 'Home' : 'Office'}</span>
    `;
  }

  // Re-render UI based on new state
  renderHero(store);
  renderCategories();
  renderInteractiveExperience(store);
  renderPlannerHelper(store);
  if (document.getElementById("featured-products")) {
    renderFeaturedProducts("featured-products");
  }
  if (document.getElementById("catalog-products")) {
    // Reset category filter when switching stores
    if (window.activeCategory && window.activeCategory !== 'all') {
      window.activeCategory = 'all';
    }
    setupCatalog(); 
  }
}

// Initialize App
document.addEventListener("DOMContentLoaded", () => {
  // Theme Toggle Logic
  const themeToggleBtn = document.getElementById("theme-toggle-btn");
  const iconMoon = document.getElementById("theme-icon-moon");
  const iconSun = document.getElementById("theme-icon-sun");

  // Load saved theme
  const savedTheme = localStorage.getItem("piloteer_theme");
  if (savedTheme === "dark") {
    document.documentElement.setAttribute("data-theme", "dark");
    if (iconMoon && iconSun) {
      iconMoon.style.display = "none";
      iconSun.style.display = "block";
    }
  }

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener("click", () => {
      const currentTheme = document.documentElement.getAttribute("data-theme");
      if (currentTheme === "dark") {
        document.documentElement.removeAttribute("data-theme");
        localStorage.setItem("piloteer_theme", "light");
        if (iconMoon && iconSun) {
          iconMoon.style.display = "block";
          iconSun.style.display = "none";
        }
      } else {
        document.documentElement.setAttribute("data-theme", "dark");
        localStorage.setItem("piloteer_theme", "dark");
        if (iconMoon && iconSun) {
          iconMoon.style.display = "none";
          iconSun.style.display = "block";
        }
      }
    });
  }

  // Load Cart from localStorage
  const savedCart = localStorage.getItem("great_wall_cart");
  if (savedCart) {
    try {
      cart = JSON.parse(savedCart);
      updateCartUI();
    } catch (e) {
      cart = [];
    }
  }

  // Header Scroll Effect
  const header = document.querySelector(".header");
  if (header) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 20) {
        header.classList.add("scrolled");
      } else {
        header.classList.remove("scrolled");
      }
    });
  }

  // Cart Drawer Events
  const cartBtn = document.getElementById("cart-btn");
  const closeCartBtn = document.getElementById("close-cart");
  const cartOverlay = document.getElementById("cart-overlay");
  
  if (cartBtn) cartBtn.addEventListener("click", toggleCartDrawer);
  if (closeCartBtn) closeCartBtn.addEventListener("click", toggleCartDrawer);
  if (cartOverlay) cartOverlay.addEventListener("click", toggleCartDrawer);

  // Close Compare Bar Events
  const closeCompareBtn = document.getElementById("close-compare-bar");
  if (closeCompareBtn) {
    closeCompareBtn.addEventListener("click", () => {
      compareList = [];
      updateCompareUI();
    });
  }

  // Set up compare modal closing
  const closeModalBtn = document.getElementById("close-modal");
  const modalOverlay = document.getElementById("modal-overlay");
  if (closeModalBtn) closeModalBtn.addEventListener("click", toggleModal);
  if (modalOverlay) modalOverlay.addEventListener("click", (e) => {
    if (e.target === modalOverlay) toggleModal();
  });

  // Setup Storefront Toggles
  document.querySelectorAll('.store-toggle-btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      updateStorefrontState(e.target.dataset.target, true);
    });
  });
  
  // Initialize storefront
  updateStorefrontState(currentStore);

  // Hide Splash Screen after initial load
  const splash = document.getElementById('splash-screen');
  if (splash) {
    setTimeout(() => {
      splash.classList.add('hidden');
    }, 1000); // Show splash for 1s initially
  }

  // Render Homepage Products if on index.html
  if (document.getElementById("featured-products")) {
    renderFeaturedProducts("featured-products");
  }

  // Render Catalog Products if on products.html
  if (document.getElementById("catalog-products")) {
    setupCatalog();
  }

  // Render Product Details if on product-detail.html
  if (document.getElementById("product-detail-container")) {
    setupProductDetails();
  }

  // Setup Relocation Planner if widget exists
  if (document.getElementById("planner-form")) {
    setupPlanner();
  }

  // Setup Checkout Page if checkout form exists
  if (document.getElementById("checkout-form")) {
    setupCheckout();
  }
});

function renderCategories() {
  const container = document.getElementById('category-grid');
  if (!container) return;
  const cats = storeCategories[currentStore] || storeCategories['office'];
  container.innerHTML = cats.map((cat, index) => `
    <div class="overlap-card" ${index % 2 !== 0 ? 'style="margin-top: 40px;"' : ''}>
      <img src="${cat.image}" alt="${cat.title}">
      <div class="overlap-label">${cat.title}</div>
    </div>
  `).join('');
}

let heroInterval;
function renderHero(store) {
  const bgContainer = document.getElementById('hero-slider-bg');
  const contentContainer = document.getElementById('hero-content');
  if (!bgContainer || !contentContainer) return;

  const content = storeContent[store];

  // Inject backgrounds
  bgContainer.innerHTML = content.heroSlides.map((img, index) => `
    <div class="hero-slide ${index === 0 ? 'active' : ''}" style="background-image: url('${img}');"></div>
  `).join('');

  // Inject content
  contentContainer.innerHTML = `
    <div class="hero-tag">
      <span style="font-size:16px;">${content.icon}</span> Premium Quality. Wholesale Price.
    </div>
    <h1 class="hero-title">${content.heroTitle}</h1>
    <p class="hero-desc">
      ${content.heroDesc}
    </p>
    <div class="hero-buttons">
      <a href="products.html" class="btn btn-primary" style="padding: 16px 32px; font-size: 16px;">Browse Complete Catalog</a>
      <a href="#planner-section" class="btn btn-secondary" style="padding: 16px 32px; font-size: 16px; background: rgba(255,255,255,0.1); color: white; border-color: rgba(255,255,255,0.3);">Explore Office Planner</a>
    </div>
    <div class="hero-stats">
      <div class="hero-stat-item">
        <h3>10k+</h3>
        <p>Ready Stock</p>
      </div>
      <div class="hero-stat-item">
        <h3>24h</h3>
        <p>Fast Delivery</p>
      </div>
      <div class="hero-stat-item">
        <h3>100%</h3>
        <p>Wholesale Value</p>
      </div>
    </div>
  `;

  // Restart slider logic
  clearInterval(heroInterval);
  const slides = bgContainer.querySelectorAll('.hero-slide');
  let currentSlide = 0;
  if (slides.length > 0) {
    heroInterval = setInterval(() => {
      slides[currentSlide].classList.remove('active');
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add('active');
    }, 5000);
  }
}

function renderInteractiveExperience(store) {
  const container = document.getElementById('interactive-experience');
  if (!container) return;

  const content = interactiveContent[store] || interactiveContent['office'];

  container.innerHTML = `
    <div class="zig-zag-image" style="background-color: hsl(var(--color-bg-card)); border-radius: 8px; overflow: hidden; box-shadow: var(--shadow-lg);">
      ${content.embed}
    </div>
    <div class="zig-zag-text">
      <span class="editorial-tag">${content.tag}</span>
      <h2 class="editorial-title">${content.title}</h2>
      <p style="color: hsl(var(--color-text-muted)); line-height: 1.8; margin-bottom: 24px; font-size: 17px;">
        ${content.desc}
      </p>
      <ul style="list-style: none; padding: 0; margin-bottom: 30px; display: flex; flex-direction: column; gap: 12px;">
        ${content.features.map(f => `
          <li style="display: flex; align-items: center; gap: 10px;">
            <div style="background: hsl(var(--color-primary) / 0.1); color: hsl(var(--color-primary)); border-radius: 50%; width: 24px; height: 24px; display: flex; align-items: center; justify-content: center; font-weight: bold;">✓</div>
            <span style="color: hsl(var(--color-text-dark)); font-weight: 500;">${f}</span>
          </li>
        `).join('')}
      </ul>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="products.html" class="btn btn-primary" style="padding: 14px 28px;">${content.btnText}</a>
        <a href="portfolio.html" target="_blank" class="btn btn-secondary" style="padding: 14px 28px;">Portfolio</a>
      </div>
    </div>
  `;
}

function renderPlannerHelper(store) {
  const badge = document.getElementById('planner-badge');
  if (!badge) return; // not on homepage
  
  const content = plannerContent[store] || plannerContent['office'];
  
  document.getElementById('planner-badge').textContent = content.badge;
  document.getElementById('planner-title').textContent = content.title;
  document.getElementById('planner-desc').textContent = content.desc;
  
  document.getElementById('planner-size-label').textContent = content.sizeLabel;
  const sizeSelect = document.getElementById('space-size');
  sizeSelect.innerHTML = content.sizeOptions.map(opt => `<option value="${opt.val}" ${opt.selected ? 'selected' : ''}>${opt.text}</option>`).join('');
  
  document.getElementById('planner-count-label').textContent = content.countLabel;
  
  document.getElementById('planner-focus-label').textContent = content.focusLabel;
  const focusSelect = document.getElementById('furniture-focus');
  focusSelect.innerHTML = content.focusOptions.map(opt => `<option value="${opt.val}" ${opt.selected ? 'selected' : ''}>${opt.text}</option>`).join('');
  
  document.getElementById('planner-results-title').textContent = content.resultsTitle;
  document.getElementById('planner-results-desc').textContent = content.resultsDesc;
  
  // Re-trigger calculation
  if (typeof calculatePlannerBundle === 'function') {
    calculatePlannerBundle();
  }
}

// Render Dynamic SVGs instead of standard images (High-quality minimalistic outline look)
function generateProductSVG(name, category, color = "var(--color-primary)") {
  let path = "";
  let viewbox = "0 0 100 100";
  
  if (category === "Chairs") {
    // Elegant ergonomic chair line art
    path = `
      <!-- Headrest -->
      <rect x="42" y="12" width="16" height="8" rx="3" fill="none" stroke="${color}" stroke-width="2.5" />
      <line x1="50" y1="20" x2="50" y2="28" stroke="${color}" stroke-width="2.5" />
      <!-- Backrest -->
      <path d="M35,28 C35,28 38,48 38,54 C38,58 42,60 50,60 C58,60 62,58 62,54 C62,48 65,28 65,28" fill="none" stroke="${color}" stroke-width="3" stroke-linecap="round" />
      <!-- Mesh texture effect inside backrest -->
      <path d="M42,33 L58,33 M40,40 L60,40 M39,47 L61,47" stroke="${color}" stroke-width="1" stroke-dasharray="1 3" />
      <!-- Seat Cushion -->
      <rect x="30" y="60" width="40" height="6" rx="2" fill="${color}" />
      <!-- Armrests -->
      <path d="M28,45 L28,55 C28,58 30,58 32,58" fill="none" stroke="${color}" stroke-width="2.5" stroke-linecap="round" />
      <path d="M72,45 L72,55 C72,58 70,58 68,58" fill="none" stroke="${color}" stroke-width="2.5" stroke-linecap="round" />
      <!-- Cylinder -->
      <line x1="50" y1="66" x2="50" y2="78" stroke="#6C757D" stroke-width="4.5" />
      <!-- Wobble mechanism / adjuster -->
      <circle cx="50" cy="66" r="2.5" fill="#212529" />
      <!-- Swivel base -->
      <path d="M30,85 L50,78 L70,85 M50,78 L50,85 M35,82 L50,78 L65,82" fill="none" stroke="#6C757D" stroke-width="3" />
      <circle cx="30" cy="86" r="2" fill="#212529" />
      <circle cx="70" cy="86" r="2" fill="#212529" />
      <circle cx="50" cy="86" r="2" fill="#212529" />
    `;
  } else if (category === "Desks") {
    // Elegant minimalist office desk
    path = `
      <!-- Desktop Surface -->
      <rect x="15" y="35" width="70" height="6" rx="1.5" fill="${color}" />
      <!-- Under-desk tray / drawers -->
      <rect x="20" y="41" width="18" height="8" fill="none" stroke="${color}" stroke-width="2" />
      <circle cx="29" cy="45" r="1.5" fill="${color}" />
      <!-- Cable tray -->
      <path d="M45,41 L65,41 L62,46 L48,46 Z" fill="none" stroke="#6C757D" stroke-width="1.5" />
      <!-- Sturdy Metal Legs -->
      <path d="M22,41 L22,78 M78,41 L78,78" fill="none" stroke="${color}" stroke-width="3.5" stroke-linecap="round" />
      <!-- Cross Bar support -->
      <line x1="22" y1="48" x2="78" y2="48" stroke="#6C757D" stroke-width="2.5" />
      <!-- Bottom Glides/Footers -->
      <line x1="18" y1="78" x2="26" y2="78" stroke="#212529" stroke-width="3" />
      <line x1="74" y1="78" x2="82" y2="78" stroke="#212529" stroke-width="3" />
    `;
  } else if (category === "Shelves") {
    // Boltless heavy duty metal shelving
    path = `
      <!-- Shelf Outer Frame -->
      <rect x="25" y="15" width="50" height="70" fill="none" stroke="${color}" stroke-width="4.5" rx="2" />
      <!-- Shelf Levels -->
      <rect x="25" y="29" width="50" height="4" fill="${color}" />
      <rect x="25" y="45" width="50" height="4" fill="${color}" />
      <rect x="25" y="61" width="50" height="4" fill="${color}" />
      <rect x="25" y="77" width="50" height="4" fill="${color}" />
      <!-- Back support braces (cross bracing) -->
      <line x1="25" y1="15" x2="75" y2="85" stroke="#6C757D" stroke-width="1" stroke-dasharray="2 3" />
      <line x1="75" y1="15" x2="25" y2="85" stroke="#6C757D" stroke-width="1" stroke-dasharray="2 3" />
      <!-- Boltless rivet holes indicators -->
      <circle cx="28" cy="22" r="1" fill="#FFF" />
      <circle cx="28" cy="37" r="1" fill="#FFF" />
      <circle cx="28" cy="53" r="1" fill="#FFF" />
      <circle cx="28" cy="69" r="1" fill="#FFF" />
      <circle cx="72" cy="22" r="1" fill="#FFF" />
      <circle cx="72" cy="37" r="1" fill="#FFF" />
      <circle cx="72" cy="53" r="1" fill="#FFF" />
      <circle cx="72" cy="69" r="1" fill="#FFF" />
    `;
  } else {
    // Lounge armchair (Home Category) representing "belonging"
    path = `
      <!-- Cushion backrest -->
      <path d="M30,25 C30,25 33,52 35,58 C38,62 62,62 65,58 C67,52 70,25 70,25" fill="none" stroke="${color}" stroke-width="4" stroke-linecap="round" />
      <rect x="35" y="32" width="30" height="20" rx="4" fill="none" stroke="${color}" stroke-width="2" stroke-dasharray="1 2" />
      <!-- Armrests pads -->
      <path d="M22,40 C22,40 22,60 27,62 C32,64 35,62 35,62" fill="none" stroke="${color}" stroke-width="4" stroke-linecap="round" />
      <path d="M78,40 C78,40 78,60 73,62 C68,64 65,62 65,62" fill="none" stroke="${color}" stroke-width="4" stroke-linecap="round" />
      <!-- Main cushion seat -->
      <rect x="25" y="58" width="50" height="10" rx="3.5" fill="${color}" />
      <!-- Cozy stitching line -->
      <line x1="28" y1="63" x2="72" y2="63" stroke="#FFF" stroke-width="1.5" stroke-dasharray="3 3" />
      <!-- Mid-century wooden legs -->
      <line x1="32" y1="68" x2="25" y2="82" stroke="#8B5A2B" stroke-width="4" stroke-linecap="round" />
      <line x1="68" y1="68" x2="75" y2="82" stroke="#8B5A2B" stroke-width="4" stroke-linecap="round" />
      <line x1="38" y1="68" x2="35" y2="80" stroke="#8B5A2B" stroke-width="3" stroke-linecap="round" />
      <line x1="62" y1="68" x2="65" y2="80" stroke="#8B5A2B" stroke-width="3" stroke-linecap="round" />
    `;
  }
  
  return `<svg class="svg-icon-product" viewBox="${viewbox}" xmlns="http://www.w3.org/2000/svg" style="width:100%; height:100%;">${path}</svg>`;
}

// Render Specific 3-Column Featured Products
function renderFeaturedProducts(elementId) {
  const container = document.getElementById(elementId);
  if (!container) return;

  const featuredData = mockProducts
    .filter(p => p.storeType === currentStore)
    .sort((a, b) => b.rating - a.rating);

  container.innerHTML = featuredData.map(product => {
    return `
      <div class="featured-item" data-id="${product.id}">
        <div class="featured-img-box" onclick="viewProductDetail(${product.id})" style="cursor: pointer; position: relative;">
          ${Math.random() > 0.5 ? '<span class="product-badge urgency" style="position: absolute; top: 10px; right: 10px; z-index: 2; border-radius: 4px; padding: 4px 8px; font-size: 12px; font-weight: bold;">🔥 Fast Selling</span>' : '<span class="product-badge urgency" style="position: absolute; top: 10px; right: 10px; z-index: 2; border-radius: 4px; padding: 4px 8px; font-size: 12px; font-weight: bold; background-color: #2E7D32;">⚡ Next Day Delivery</span>'}
          <img src="${product.image}" alt="${product.name}">
        </div>
        <div class="featured-price">AED ${product.price}.00</div>
        <h3 class="featured-name" onclick="viewProductDetail(${product.id})" style="cursor: pointer;">${product.name}</h3>
        <div class="featured-stars">
          ${'★'.repeat(product.rating)}${'☆'.repeat(5 - product.rating)}
        </div>
        <button class="featured-btn" onclick="addToCart(${product.id})">Shop Now</button>
      </div>
    `;
  }).join('');
}

// Render Products Grid
function renderProducts(productsToRender, elementId) {
  const container = document.getElementById(elementId);
  if (!container) return;

  if (productsToRender.length === 0) {
    container.innerHTML = `
      <div style="grid-column: 1/-1; text-align: center; padding: 40px; color: hsl(var(--color-text-muted));">
        <h3>No products found</h3>
        <p>Try adjusting your search query or filters.</p>
      </div>
    `;
    return;
  }

  container.innerHTML = productsToRender.map(product => {
    const isCompared = compareList.includes(product.id);
    const saveAmt = product.originalPrice - product.price;
    const discountPercent = Math.round((saveAmt / product.originalPrice) * 100);
    
    return `
      <div class="product-card" data-id="${product.id}">
        <div class="product-img-wrapper" onclick="viewProductDetail(${product.id})">
          <span class="product-badge">${product.badge}</span>
          <div class="product-img">
            ${product.image ? `<img src="${product.image}" alt="${product.name}">` : generateProductSVG(product.name, product.category, product.iconColor)}
          </div>
        </div>
        <button class="product-compare-checkbox ${isCompared ? 'active' : ''}" 
                onclick="event.stopPropagation(); toggleCompare(${product.id})" 
                title="Compare features">
          <svg class="svg-icon" viewBox="0 0 24 24"><path d="M16 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V10l-6-7zM14 8h5v2h-5V8zm-2 5H5v-2h7v2zm5 4H5v-2h12v2z"/></svg>
        </button>
        <div class="product-content">
          <h3 class="product-name" onclick="viewProductDetail(${product.id})">${product.name}</h3>
          <div class="product-stars">
            <span>${'★'.repeat(Math.round(product.rating))}${'☆'.repeat(5 - Math.round(product.rating))}</span>
            <span style="color:hsl(var(--color-text-muted)); font-size:12px; margin-left:8px;">(${product.stockCount} in stock)</span>
            <span style="color: hsl(var(--color-text-muted)); margin-left: 4px;">${product.rating} (${(product.id * 47) % 300 + 15} reviews)</span>
          </div>

          <div class="product-features-preview">
            ${product.features.slice(0, 2).map(f => `<span class="feature-tag-sm">${f}</span>`).join('')}
            <span class="feature-tag-sm" style="color: hsl(var(--color-secondary));">⚡ ${product.deliveryTime}</span>
          </div>

          <div class="product-footer">
            <div class="product-price">
              <span class="price-now">AED ${product.price}</span>
              <span class="price-original">AED ${product.originalPrice}</span>
            </div>
            <button class="product-buy-btn" onclick="event.stopPropagation(); addToCart(${product.id})" title="Add to Cart">
              <svg class="svg-icon" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
            </button>
          </div>
        </div>
      </div>
    `;
  }).join('');
}

// Redirect/Simulate viewing detail page
function viewProductDetail(productId) {
  window.location.href = `product-detail.html?id=${productId}`;
}

// Cart Drawer Operations
function toggleCartDrawer() {
  const drawer = document.getElementById("cart-drawer");
  const overlay = document.getElementById("cart-overlay");
  
  if (drawer && overlay) {
    drawer.classList.toggle("open");
    overlay.classList.toggle("open");
  }
}

function addToCart(productId, quantity = 1) {
  const product = mockProducts.find(p => p.id === productId);
  if (!product) return;

  const cartItem = cart.find(item => item.product.id === productId);
  if (cartItem) {
    cartItem.quantity += quantity;
  } else {
    cart.push({ product, quantity });
  }

  saveCart();
  updateCartUI();
  
  // Show sleek toast notification instead of opening the drawer immediately
  showToast("Added to Cart - Ready for Delivery!");
}

function showToast(message) {
  let toastContainer = document.querySelector('.toast-container');
  if (!toastContainer) {
    toastContainer = document.createElement('div');
    toastContainer.className = 'toast-container';
    document.body.appendChild(toastContainer);
  }
  
  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `
    <div class="toast-icon"><i class="fas fa-check-circle"></i></div>
    <div class="toast-message">${message}</div>
  `;
  
  toastContainer.appendChild(toast);
  
  // Trigger animation
  setTimeout(() => toast.classList.add('show'), 10);
  
  // Remove after 3 seconds
  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => toast.remove(), 400); // Wait for transition
  }, 3000);
}

function removeFromCart(productId) {
  cart = cart.filter(item => item.product.id !== productId);
  saveCart();
  updateCartUI();
}

function updateQty(productId, delta) {
  const cartItem = cart.find(item => item.product.id === productId);
  if (!cartItem) return;

  cartItem.quantity += delta;
  if (cartItem.quantity <= 0) {
    removeFromCart(productId);
  } else {
    saveCart();
    updateCartUI();
  }
}

function saveCart() {
  localStorage.setItem("great_wall_cart", JSON.stringify(cart));
}

function updateCartUI() {
  const countBadge = document.getElementById("cart-count");
  const cartItemsContainer = document.getElementById("cart-items");
  const totalAmount = document.getElementById("cart-total-amount");
  const cartItemCountLabel = document.getElementById("cart-item-count");
  
  if (!countBadge) return;

  // Calculate totals
  const totalQty = cart.reduce((sum, item) => sum + item.quantity, 0);
  const totalPrice = cart.reduce((sum, item) => sum + (item.product.price * item.quantity), 0);

  // Update navbar badge
  countBadge.textContent = totalQty;
  if (cartItemCountLabel) cartItemCountLabel.textContent = `(${totalQty})`;

  // Reset footer display and checkout button state
  const drawerFooter = document.querySelector(".drawer-footer");
  if (drawerFooter) {
    drawerFooter.style.display = 'block';
    const checkoutBtn = drawerFooter.querySelector(".btn");
    if (checkoutBtn) {
      checkoutBtn.innerHTML = `Book Cash on Delivery Order`;
      checkoutBtn.style.opacity = '1';
      checkoutBtn.disabled = false;
    }
  }

  // Update Drawer items
  if (cartItemsContainer) {
    if (cart.length === 0) {
      cartItemsContainer.innerHTML = `
        <div style="text-align: center; padding: 40px 0; color: hsl(var(--color-text-muted));">
          <svg class="svg-icon" viewBox="0 0 24 24" style="width: 48px; height: 48px; margin-bottom: 16px; opacity:0.3;"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <p>Your shopping cart is empty</p>
        </div>
      `;
    } else {
      cartItemsContainer.innerHTML = cart.map(item => `
        <div class="cart-item">
          <div class="cart-item-img">
            ${item.product.image ? `<img src="${item.product.image}" alt="${item.product.name}">` : generateProductSVG(item.product.name, item.product.category, item.product.iconColor)}
          </div>
          <div class="cart-item-info">
            <h4 class="cart-item-title">${item.product.name}</h4>
            <div class="cart-item-price">AED ${item.product.price}</div>
            <div class="cart-item-actions">
              <div class="quantity-control">
                <button class="qty-btn" onclick="updateQty(${item.product.id}, -1)">-</button>
                <span class="qty-val">${item.quantity}</span>
                <button class="qty-btn" onclick="updateQty(${item.product.id}, 1)">+</button>
              </div>
              <button class="remove-btn" onclick="removeFromCart(${item.product.id})">Remove</button>
            </div>
          </div>
        </div>
      `).join('');
    }
  }

  // Update Drawer subtotal
  if (totalAmount) {
    totalAmount.textContent = `AED ${totalPrice}`;
  }
}

// Redirect to checkout page
function checkout() {
  if (cart.length === 0) {
    alert("Your cart is empty!");
    return;
  }
  
  const drawerContent = document.getElementById("cart-items");
  const drawerFooter = document.querySelector(".drawer-footer");
  
  if (!drawerContent || !drawerFooter) return;
  
  // Simulate sleek processing
  const checkoutBtn = drawerFooter.querySelector(".btn");
  if (checkoutBtn) {
    checkoutBtn.innerHTML = `<svg class="svg-icon pulse" viewBox="0 0 24 24" style="width: 20px; height: 20px; animation: spin 1s linear infinite;"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg> Processing Securely...`;
    checkoutBtn.style.opacity = '0.8';
    checkoutBtn.disabled = true;
  }
  
  setTimeout(() => {
    // Empty the cart
    cart.length = 0;
    saveCart();
    
    // Show sleek success state
    drawerContent.innerHTML = `
      <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; text-align: center; padding: 40px 20px;">
        <div style="width: 64px; height: 64px; background-color: hsl(var(--color-success) / 0.1); color: hsl(var(--color-success)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 24px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <h3 style="font-family: 'Outfit', sans-serif; font-size: 24px; color: hsl(var(--color-text-dark)); margin-bottom: 8px;">Order Confirmed!</h3>
        <p style="color: hsl(var(--color-text-muted)); line-height: 1.6; margin-bottom: 24px;">Your items have been reserved and will be dispatched within 24 hours via Next-Day Cash on Delivery.</p>
        <button class="btn btn-outline" onclick="toggleCartDrawer(); updateCartUI();" style="width: 100%;">Continue Browsing</button>
      </div>
    `;
    
    drawerFooter.style.display = 'none';
  }, 1800);
}

// Setup Checkout Page Logic
function setupCheckout() {
  const summaryContainer = document.getElementById("checkout-summary");
  const subtotalEl = document.getElementById("checkout-subtotal");
  const shippingEl = document.getElementById("checkout-shipping");
  const totalEl = document.getElementById("checkout-total");
  const placeOrderBtn = document.getElementById("place-order-btn");
  const checkoutForm = document.getElementById("checkout-form");

  if (!summaryContainer) return;

  if (cart.length === 0) {
    summaryContainer.innerHTML = "<p>Your cart is empty.</p>";
    if (placeOrderBtn) placeOrderBtn.disabled = true;
    return;
  }

  // Calculate totals
  const subtotal = cart.reduce((sum, item) => sum + (item.product.price * item.quantity), 0);
  const shipping = subtotal > 1000 ? 0 : 50; // Free shipping over 1000 AED
  const total = subtotal + shipping;

  // Render items
  summaryContainer.innerHTML = cart.map(item => `
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 8px;">
      <div style="display: flex; gap: 12px; align-items: center;">
        <div style="width: 40px; height: 40px;" class="checkout-item-img">
          ${item.product.image ? `<img src="${item.product.image}" alt="${item.product.name}" style="width:100%; height:100%; object-fit:cover; border-radius: var(--radius-sm);">` : generateProductSVG(item.product.name, item.product.category, item.product.iconColor)}
        </div>
        <div>
          <div style="font-weight: 600; font-size: 14px;">${item.product.name}</div>
          <div style="font-size: 12px; color: hsl(var(--color-text-muted));">Qty: ${item.quantity}</div>
        </div>
      </div>
      <div style="font-weight: 700;">AED ${item.product.price * item.quantity}</div>
    </div>
  `).join('');

  if (subtotalEl) subtotalEl.textContent = `AED ${subtotal}`;
  if (shippingEl) shippingEl.textContent = shipping === 0 ? "Free" : `AED ${shipping}`;
  if (totalEl) totalEl.textContent = `AED ${total}`;

  if (checkoutForm) {
    checkoutForm.addEventListener("submit", (e) => {
      e.preventDefault();
      
      const name = document.getElementById("co-name").value;
      const address = document.getElementById("co-address").value;
      
      alert(`Order Placed Successfully!\n\nThank you, ${name}.\nWe will deliver your items to: ${address} within 24-48 hours.\nTotal amount to pay: AED ${total}.`);
      
      cart = [];
      saveCart();
      window.location.href = "index.html";
    });
  }
}

// Setup Planner Logic
function setupPlanner() {
  const form = document.getElementById("planner-form");
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault();
  });

  const inputs = form.querySelectorAll("input, select");
  inputs.forEach(input => {
    input.addEventListener("change", calculatePlannerBundle);
    input.addEventListener("input", calculatePlannerBundle);
  });

  // Initialize the draggable panorama viewer
  initPanorama();

  // Run initial calculation
  calculatePlannerBundle();
}

function initPanorama() {
  const container = document.getElementById("panorama-container");
  const img = document.getElementById("panorama-img");
  const hotspots = document.querySelectorAll(".hotspot");
  if (!container || !img) return;

  container._isDragging = false;
  container._startX = 0;
  container._startY = 0;
  img._currentTranslateX = 0;
  img._currentTranslateY = 0;
  img._previousTranslateX = 0;
  img._previousTranslateY = 0;

  const calculateMaxPan = () => {
    const containerWidth = container.clientWidth;
    const containerHeight = container.clientHeight;
    const imgWidth = img.clientWidth || containerWidth * 1.5;
    const imgHeight = img.clientHeight || containerHeight;
    return {
      x: Math.max(0, imgWidth - containerWidth),
      y: Math.max(0, imgHeight - containerHeight)
    };
  };

  container.addEventListener("mousedown", (e) => {
    container._isDragging = true;
    container._startX = e.clientX;
    container._startY = e.clientY;
    container.style.cursor = "grabbing";
    e.preventDefault(); // prevent default image drag behavior
  });

  window.addEventListener("mouseup", () => {
    if (!container._isDragging) return;
    container._isDragging = false;
    img._previousTranslateX = img._currentTranslateX;
    img._previousTranslateY = img._currentTranslateY;
    container.style.cursor = "grab";
  });

  window.addEventListener("mousemove", (e) => {
    if (!container._isDragging) return;
    
    const maxPan = calculateMaxPan();
    const deltaX = e.clientX - container._startX;
    const deltaY = e.clientY - container._startY;
    
    img._currentTranslateX = img._previousTranslateX + deltaX;
    img._currentTranslateY = img._previousTranslateY + deltaY;
    
    if (img._currentTranslateX > 0) img._currentTranslateX = 0;
    if (img._currentTranslateX < -maxPan.x) img._currentTranslateX = -maxPan.x;
    
    if (img._currentTranslateY > 0) img._currentTranslateY = 0;
    if (img._currentTranslateY < -maxPan.y) img._currentTranslateY = -maxPan.y;
    
    img.style.transform = `translate(${img._currentTranslateX}px, ${img._currentTranslateY}px)`;
  });
  
  // Touch support
  container.addEventListener("touchstart", (e) => {
    container._isDragging = true;
    container._startX = e.touches[0].clientX;
    container._startY = e.touches[0].clientY;
  });
  
  window.addEventListener("touchend", () => {
    if (!container._isDragging) return;
    container._isDragging = false;
    img._previousTranslateX = img._currentTranslateX;
    img._previousTranslateY = img._currentTranslateY;
  });
  
  window.addEventListener("touchmove", (e) => {
    if (!container._isDragging) return;
    const maxPan = calculateMaxPan();
    const deltaX = e.touches[0].clientX - container._startX;
    const deltaY = e.touches[0].clientY - container._startY;
    
    img._currentTranslateX = img._previousTranslateX + deltaX;
    img._currentTranslateY = img._previousTranslateY + deltaY;
    
    if (img._currentTranslateX > 0) img._currentTranslateX = 0;
    if (img._currentTranslateX < -maxPan.x) img._currentTranslateX = -maxPan.x;
    
    if (img._currentTranslateY > 0) img._currentTranslateY = 0;
    if (img._currentTranslateY < -maxPan.y) img._currentTranslateY = -maxPan.y;

    img.style.transform = `translate(${img._currentTranslateX}px, ${img._currentTranslateY}px)`;
  });
}

function calculatePlannerBundle() {
  const spaceSize = document.getElementById("space-size").value;
  const staffCount = parseInt(document.getElementById("staff-count").value) || 1;
  const focus = document.getElementById("furniture-focus").value;
  
  const panoImg = document.getElementById("panorama-img");

  // Decide quantities based on layout size
  const chairsNeeded = staffCount;
  const desksNeeded = staffCount;
  // Shelves needed: roughly 1 shelf per 3 desks
  const shelvesNeeded = Math.max(1, Math.round(staffCount / 3));

  // Determine which specific models to recommend based on preference and store
  let recommendedChair, recommendedDesk, recommendedShelf;
  
  const content = plannerContent[currentStore] || plannerContent['office'];

  if (panoImg) {
    if (spaceSize === "small") panoImg.src = content.panoImages.small;
    else if (spaceSize === "large") panoImg.src = content.panoImages.large;
    else panoImg.src = content.panoImages.medium;
    
    // Reset transform
    panoImg.style.transform = `translate(0px, 0px)`;
    panoImg._currentTranslateX = 0;
    panoImg._currentTranslateY = 0;
    panoImg._previousTranslateX = 0;
    panoImg._previousTranslateY = 0;
  }

  if (currentStore === 'home') {
    if (focus === "comfort") {
      recommendedChair = mockProducts.find(p => p.name.includes("Bunk Bed") && p.name.includes("Wood")) || mockProducts.find(p => p.storeType === 'home');
      recommendedDesk = mockProducts.find(p => p.name.includes("Verdana Armchair")) || mockProducts.find(p => p.storeType === 'home');
      recommendedShelf = mockProducts.find(p => p.name.includes("Titan")) || mockProducts.find(p => p.storeType === 'home');
    } else if (focus === "budget") {
      recommendedChair = mockProducts.find(p => p.name.includes("Bunk Bed") && p.name.includes("Steel")) || mockProducts.find(p => p.storeType === 'home');
      recommendedDesk = mockProducts.find(p => p.name.includes("Stool")) || mockProducts.find(p => p.storeType === 'home');
      recommendedShelf = mockProducts.find(p => p.name.includes("Titan")) || mockProducts.find(p => p.storeType === 'home');
    } else {
      recommendedChair = mockProducts.find(p => p.name.includes("Bunk Bed")) || mockProducts.find(p => p.storeType === 'home');
      recommendedDesk = mockProducts.find(p => p.name.includes("Verdana")) || mockProducts.find(p => p.storeType === 'home');
      recommendedShelf = mockProducts.find(p => p.name.includes("Titan")) || mockProducts.find(p => p.storeType === 'home');
    }
  } else {
    // Office
    if (focus === "comfort") {
      recommendedChair = mockProducts.find(p => p.id === 1); // Sovereign Task Chair
      recommendedDesk = mockProducts.find(p => p.id === 2);  // Zenith Comfort Desk
      recommendedShelf = mockProducts.find(p => p.id === 3); // Titan Shelf
    } else if (focus === "budget") {
      recommendedChair = mockProducts.find(p => p.id === 6); // Aura Wobble Stool (Budget Active option)
      recommendedDesk = mockProducts.find(p => p.id === 7);  // Horizon Oak Desk (Affordable Option)
      recommendedShelf = mockProducts.find(p => p.id === 3); // Titan Shelf
    } else {
      // Balanced
      recommendedChair = mockProducts.find(p => p.id === 1); // Sovereign Chair
      recommendedDesk = mockProducts.find(p => p.id === 7);  // Horizon Desk
      recommendedShelf = mockProducts.find(p => p.id === 3); // Titan Shelf
    }
  }

  // Fallback check
  const defaultHome = mockProducts.find(p => p.storeType === 'home');
  recommendedChair = recommendedChair || (currentStore === 'home' ? defaultHome : mockProducts[0]);
  recommendedDesk = recommendedDesk || (currentStore === 'home' ? defaultHome : mockProducts[1]);
  recommendedShelf = recommendedShelf || (currentStore === 'home' ? defaultHome : mockProducts[2]);

  // Calculate pricing
  const chairsCost = recommendedChair.price * chairsNeeded;
  const desksCost = recommendedDesk.price * desksNeeded;
  const shelvesCost = recommendedShelf.price * shelvesNeeded;
  const totalCost = chairsCost + desksCost + shelvesCost;

  // Display results
  const itemsContainer = document.getElementById("planner-items-list");
  const totalAmountEl = document.getElementById("planner-total-amount");
  const addBundleBtn = document.getElementById("planner-add-bundle-btn");

  if (itemsContainer && totalAmountEl) {
    itemsContainer.innerHTML = `
      <li class="results-item">
        <span>${chairsNeeded}x ${recommendedChair.name}</span>
        <span>AED ${chairsCost}</span>
      </li>
      <li class="results-item">
        <span>${desksNeeded}x ${recommendedDesk.name}</span>
        <span>AED ${desksCost}</span>
      </li>
      <li class="results-item">
        <span>${shelvesNeeded}x ${recommendedShelf.name}</span>
        <span>AED ${shelvesCost}</span>
      </li>
      <li class="results-item" style="color: hsl(var(--color-secondary)); font-weight: 600;">
        <span>🚀 Guaranteed Delivery:</span>
        <span>Next-Day Delivery</span>
      </li>
    `;

    totalAmountEl.textContent = `AED ${totalCost}`;
  }

  // Hook button event
  if (addBundleBtn) {
    addBundleBtn.onclick = () => {
      addToCart(recommendedChair.id, chairsNeeded);
      addToCart(recommendedDesk.id, desksNeeded);
      addToCart(recommendedShelf.id, shelvesNeeded);
      
      // Open the sleek cart drawer instead of an alert
      toggleCartDrawer();
    };
  }
}

// Compare Operations
function toggleCompare(productId) {
  const index = compareList.indexOf(productId);
  if (index > -1) {
    compareList.splice(index, 1);
  } else {
    if (compareList.length >= 3) {
      alert("You can compare up to 3 products at a time.");
      return;
    }
    compareList.push(productId);
  }
  
  updateCompareUI();
  
  // Reflect checking in catalog page grid if exists
  if (document.getElementById("catalog-products")) {
    const card = document.querySelector(`.product-card[data-id="${productId}"]`);
    if (card) {
      const chk = card.querySelector(".product-compare-checkbox");
      if (chk) chk.classList.toggle("active");
    }
  }
}

function updateCompareUI() {
  const compareBar = document.getElementById("compare-bar");
  const thumbsContainer = document.getElementById("compare-items-thumbs");
  const countLabel = document.getElementById("compare-count");
  const compareBtn = document.getElementById("compare-submit-btn");

  if (!compareBar || !thumbsContainer) return;

  if (compareList.length > 0) {
    compareBar.classList.add("open");
    if (countLabel) countLabel.textContent = `${compareList.length} Selected`;

    thumbsContainer.innerHTML = compareList.map(id => {
      const product = mockProducts.find(p => p.id === id);
      return `
        <div class="compare-thumb">
          ${product.image ? `<img src="${product.image}" alt="${product.name}">` : generateProductSVG(product.name, product.category, product.iconColor)}
          <span class="compare-remove" onclick="toggleCompare(${id})">×</span>
        </div>
      `;
    }).join('');

    if (compareBtn) {
      compareBtn.disabled = compareList.length < 2;
      compareBtn.style.opacity = compareList.length < 2 ? "0.5" : "1";
      compareBtn.onclick = showCompareModal;
    }
  } else {
    compareBar.classList.remove("open");
  }
}

function toggleModal() {
  const modal = document.getElementById("modal-overlay");
  if (modal) {
    modal.classList.toggle("open");
  }
}

function showCompareModal() {
  if (compareList.length < 2) return;
  
  const compareProducts = compareList.map(id => mockProducts.find(p => p.id === id));
  const tableBody = document.getElementById("compare-modal-body");
  
  if (!tableBody) return;

  // Set up comparison layout table inside modal
  tableBody.innerHTML = `
    <div style="overflow-x:auto;">
      <table class="specs-table" style="width:100%; border-collapse:collapse; min-width:600px;">
        <thead>
          <tr style="border-bottom: 2px solid hsl(var(--color-border));">
            <th style="padding:16px; text-align:left; width: 180px;">Specifications</th>
            ${compareProducts.map(p => `
              <th style="padding:16px; text-align:center;">
                <div class="compare-modal-img" style="width:60px; height:60px; margin: 0 auto 12px auto;">
                  ${p.image ? `<img src="${p.image}" alt="${p.name}" style="width:100%; height:100%; object-fit:cover; border-radius:var(--radius-sm);">` : generateProductSVG(p.name, p.category, p.iconColor)}
                </div>
                <div style="font-weight:700; font-size:15px; margin-bottom:8px;">${p.name}</div>
                <div style="color:hsl(var(--color-primary)); font-weight:800; font-size:16px;">AED ${p.price}</div>
              </th>
            `).join('')}
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Category</td>
            ${compareProducts.map(p => `<td style="padding:12px; text-align:center;">${p.category}</td>`).join('')}
          </tr>
          <tr>
            <td style="padding:12px; border-right:1px solid hsl(var(--color-border)); font-weight:bold; width:20%;">Delivery</td>
            ${compareProducts.map(p => `<td style="padding:12px; text-align:center; color:hsl(var(--color-secondary)); font-weight:600;">⚡ ${p.deliveryTime}</td>`).join('')}
          </tr>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Stock Count</td>
            ${compareProducts.map(p => `<td style="padding:12px; text-align:center; font-weight:600;">📦 ${p.stockCount} units available</td>`).join('')}
          </tr>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Ergonomics Score</td>
            ${compareProducts.map(p => `
              <td style="padding:12px; text-align:center;">
                <div style="display:flex; flex-direction:column; gap:4px; font-size:12px; align-items:center;">
                  <span>Support: ${p.comfortRatings.support}%</span>
                  <span>Adjustability: ${p.comfortRatings.adjustment}%</span>
                </div>
              </td>
            `).join('')}
          </tr>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Dimensions</td>
            ${compareProducts.map(p => `
              <td style="padding:12px; text-align:center; font-size:13px; line-height:1.4;">
                H: ${p.dimensions.height}<br>
                W: ${p.dimensions.width}<br>
                D: ${p.dimensions.depth}
              </td>
            `).join('')}
          </tr>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Weight Limit</td>
            ${compareProducts.map(p => `<td style="padding:12px; text-align:center;">${p.dimensions.weightLimit}</td>`).join('')}
          </tr>
          <tr>
            <td style="padding:12px; font-weight:700; color:hsl(var(--color-text-muted));">Unique Features</td>
            ${compareProducts.map(p => `
              <td style="padding:12px; font-size:13px; text-align:center;">
                <ul style="padding-left:20px; text-align:left; color:hsl(var(--color-text-muted)); font-size:14px;">
                  ${p.features.map(f => `<li>✓ ${f}</li>`).join('')}
                </ul>
              </td>
            `).join('')}
          </tr>
          <tr style="border-top:1px solid hsl(var(--color-border));">
            <td></td>
            ${compareProducts.map(p => `
              <td style="padding:20px; text-align:center;">
                <button class="btn btn-primary" style="padding:8px 16px; font-size:13px;" onclick="toggleModal(); addToCart(${p.id})">Add to Cart</button>
              </td>
            `).join('')}
          </tr>
        </tbody>
      </table>
    </div>
  `;

  toggleModal();
}

// Catalog Page Functionality
function setupCatalog() {
  const searchInput = document.getElementById("search-input");
  const categoryListContainer = document.getElementById("category-filter-list");
  const sortSelect = document.getElementById("sort-select");
  const priceMin = document.getElementById("price-min");
  const priceMax = document.getElementById("price-max");
  const applyPriceBtn = document.getElementById("apply-price-btn");

  let activeCategory = "all";

  // Filter products by current store
  const storeProducts = mockProducts.filter(p => p.storeType === currentStore);

  // Render Categories with counts
  if (categoryListContainer) {
    const catCounts = storeProducts.reduce((acc, p) => {
      acc[p.category] = (acc[p.category] || 0) + 1;
      return acc;
    }, { "all": storeProducts.length });

    let cats = [{ id: "all", label: "All Categories" }];
    
    if (currentStore === 'office') {
      cats.push(
        { id: "Chairs", label: "Office Chairs" },
        { id: "Desks", label: "Office Desks" },
        { id: "Shelves", label: "Industrial Shelves" }
      );
    } else {
      cats.push(
        { id: "Home", label: "Home & Lounge" },
        { id: "Bunkbeds", label: "Bunkbeds" }
      );
    }

    categoryListContainer.innerHTML = cats.map(c => `
      <li>
        <label style="display: flex; justify-content: space-between; align-items: center; cursor: pointer; padding: 6px 12px; border-radius: var(--radius-sm); transition: 0.2s; background: ${activeCategory === c.id ? 'hsl(var(--color-primary) / 0.1)' : 'transparent'}; color: ${activeCategory === c.id ? 'hsl(var(--color-primary))' : 'hsl(var(--color-text-dark))'}; font-weight: ${activeCategory === c.id ? '600' : '400'};"
               onclick="setActiveCategory('${c.id}')"
               id="cat-label-${c.id}">
          <span>${c.label}</span>
          <span style="background: hsl(var(--color-bg-card)); padding: 2px 8px; border-radius: 12px; font-size: 11px; border: 1px solid hsl(var(--color-border)); color: hsl(var(--color-text-muted));">${catCounts[c.id] || 0}</span>
        </label>
      </li>
    `).join('');
  }

  window.setActiveCategory = function(catId) {
    activeCategory = catId;
    
    // Update styling
    document.querySelectorAll('[id^="cat-label-"]').forEach(el => {
      if (el.id === `cat-label-${catId}`) {
        el.style.background = 'hsl(var(--color-primary) / 0.1)';
        el.style.color = 'hsl(var(--color-primary))';
        el.style.fontWeight = '600';
      } else {
        el.style.background = 'transparent';
        el.style.color = 'hsl(var(--color-text-dark))';
        el.style.fontWeight = '400';
      }
    });

    applyFilters();
  };

  function applyFilters() {
    let result = mockProducts.filter(p => p.storeType === currentStore);

    // Search query
    if (searchInput) {
      const query = searchInput.value.toLowerCase();
      result = result.filter(p => 
        p.name.toLowerCase().includes(query) || 
        p.description.toLowerCase().includes(query)
      );
    }

    // Category
    if (activeCategory !== "all") {
      result = result.filter(p => p.category === activeCategory);
    }

    // Price
    if (priceMin && priceMin.value !== "") {
      result = result.filter(p => p.price >= parseFloat(priceMin.value));
    }
    if (priceMax && priceMax.value !== "") {
      result = result.filter(p => p.price <= parseFloat(priceMax.value));
    }

    // Sorting
    if (sortSelect) {
      const sort = sortSelect.value;
      if (sort === "price-low") {
        result.sort((a, b) => a.price - b.price);
      } else if (sort === "price-high") {
        result.sort((a, b) => b.price - a.price);
      } else if (sort === "rating") {
        result.sort((a, b) => b.rating - a.rating);
      } else if (sort === "stock") {
        result.sort((a, b) => b.stockCount - a.stockCount);
      }
    }

    renderProducts(result, "catalog-products");
  }

  if (searchInput) searchInput.addEventListener("input", applyFilters);
  if (sortSelect) sortSelect.addEventListener("change", applyFilters);
  if (applyPriceBtn) applyPriceBtn.addEventListener("click", applyFilters);

  // Initial render
  applyFilters();
}

// Product Details Setup
function setupProductDetails() {
  // Extract product ID from URL query parameters
  const params = new URLSearchParams(window.location.search);
  const productId = parseInt(params.get("id")) || 1;
  const product = mockProducts.find(p => p.id === productId);

  const detailContainer = document.getElementById("product-detail-container");
  if (!detailContainer || !product) return;

  const saveAmt = product.originalPrice - product.price;

  detailContainer.innerHTML = `
    <div class="detail-grid">
      <!-- Gallery Column -->
      <div class="detail-gallery">
        <div class="gallery-main">
          ${product.image ? `<img src="${product.image}" alt="${product.name}">` : generateProductSVG(product.name, product.category, product.iconColor)}
        </div>
        <div class="gallery-thumbs">
          <div class="gallery-thumb active">
            ${product.image ? `<img src="${product.image}" alt="${product.name}">` : generateProductSVG(product.name, product.category, product.iconColor)}
          </div>
        </div>
        
        <!-- Comfort and Belonging Scorecard Moved to Left Column -->
        <div class="comfort-scorecard" style="margin-top: 40px;">
          <h3 class="scorecard-title">
            <svg class="svg-icon" viewBox="0 0 24 24" style="color:hsl(var(--color-primary));"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
            Seating Comfort & Support Scorecard
          </h3>
          <div class="scorecard-grid">
            <div class="score-item">
              <div class="score-label">Spine & Lumbar Support (${product.comfortRatings.support}%)</div>
              <div class="score-bar-wrapper">
                <div class="score-bar" style="width: ${product.comfortRatings.support}%"></div>
              </div>
            </div>
            <div class="score-item">
              <div class="score-label">Material Breathability (${product.comfortRatings.breathability}%)</div>
              <div class="score-bar-wrapper">
                <div class="score-bar secondary" style="width: ${product.comfortRatings.breathability}%"></div>
              </div>
            </div>
            <div class="score-item" style="grid-column: 1/-1;">
              <div class="score-label">Adjustability & Fit Flexibility (${product.comfortRatings.adjustment}%)</div>
              <div class="score-bar-wrapper">
                <div class="score-bar" style="width: ${product.comfortRatings.adjustment}%; background-color: hsl(var(--color-accent));"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Info Column -->
      <div class="detail-info">
        <span class="detail-category">${product.category}</span>
        <h1 class="detail-title">${product.name}</h1>
        
        <div class="detail-rating">
          <span>${'★'.repeat(Math.round(product.rating))}${'☆'.repeat(5 - Math.round(product.rating))}</span>
          <span style="color:hsl(var(--color-text-muted)); margin-left:10px;">${product.rating} / 5.0</span>
        </div>

        <div class="detail-price-row">
          <span class="detail-price">AED ${product.price}</span>
          <span class="price-original" style="font-size: 18px; margin-top:2px;">AED ${product.originalPrice}</span>
        </div>
        
        <div class="detail-stock-delivery">
          <span class="detail-stock">⚡ ${product.deliveryTime} Delivery</span>
          <span class="detail-stock" style="background: hsl(var(--color-accent)/0.1); color: hsl(var(--color-accent));">✓ ${product.stockCount} In Stock Dubai</span>
        </div>

        <p class="detail-desc">${product.description}</p>

        <div style="display:flex; gap:16px; margin-bottom: 20px;">
          <button class="btn btn-primary" onclick="addToCart(${product.id})" style="flex-grow:1; padding: 16px 28px;">Add to Cart</button>
          <button class="btn btn-secondary" onclick="toggleCompare(${product.id})" style="padding: 16px 20px;">Compare</button>
        </div>

      </div>
    </div>

    <!-- Specifications and Reviews Layout -->
    <div class="detail-bottom-grid">
      <!-- Specifications Column -->
      <div class="detail-specs-section">
        <h3 style="font-size: 20px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 8px; margin-bottom: 16px;">Product Specifications</h3>
        <table class="specs-table">
          <tr>
            <td>Dimensions (H x W x D)</td>
            <td>${product.dimensions.height} x ${product.dimensions.width} x ${product.dimensions.depth}</td>
          </tr>
          <tr>
            <td>Weight Capacity Limit</td>
            <td>${product.dimensions.weightLimit}</td>
          </tr>
          <tr>
            <td>Assembly Method</td>
            <td>Easy Toolless Setup / Pre-Assembled options</td>
          </tr>
          <tr>
            <td>Core Advantage features</td>
            <td>${product.features.join(", ")}</td>
          </tr>
        </table>
      </div>

      <!-- Reviews Column -->
      <div class="detail-reviews-section">
        <h3 style="font-size: 20px; border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 8px; margin-bottom: 16px;">Customer Reviews</h3>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div style="color: #FFA41C; font-size: 18px;">${'★'.repeat(Math.round(product.rating))}${'☆'.repeat(5 - Math.round(product.rating))}</div>
            <div style="color: hsl(var(--color-text-muted)); font-size: 14px;">Verified Purchase</div>
          </div>
          <button class="btn btn-secondary" onclick="alert('Review submitted for moderation. Thank you!')" style="padding: 10px 20px;">Write a Review</button>
        </div>
        
        <div class="review-item" style="border-bottom: 1px solid hsl(var(--color-border)); padding-bottom: 16px; margin-bottom: 16px;">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
            <div style="width: 32px; height: 32px; background-color: hsl(var(--color-primary)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px;">A</div>
            <div>
              <div style="color: #FFA41C; font-size: 12px;">★★★★★</div>
              <p style="margin: 5px 0; font-size: 14px;">"Absolutely transformed my workspace! The delivery was incredibly fast, arrived the very next day in Dubai."</p>
            </div>
          </div>
        </div>
        
        <div class="review-item">
          <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
            <div style="width: 32px; height: 32px; background-color: hsl(var(--color-secondary)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px;">S</div>
            <div>
              <div style="color: #FFA41C; font-size: 12px;">★★★★☆</div>
              <p style="margin: 5px 0; font-size: 14px;">"Great quality furniture for the price. Assembly took a bit longer than expected but totally worth it."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  `;
}

// Global UI Effects
document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector('.header.transparent');
  if (header) {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initialize state on load
  }

  // Active Link Scroll Spy
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link');

  if (sections.length > 0 && navLinks.length > 0) {
    const updateActiveLink = () => {
      let current = '';
      const scrollY = window.scrollY;

      if (scrollY < 200) {
        current = 'index.html';
      } else {
        sections.forEach(section => {
          const sectionTop = section.offsetTop;
          if (scrollY >= (sectionTop - 150)) {
            current = '#' + section.getAttribute('id');
          }
        });
      }

      navLinks.forEach(link => {
        link.classList.remove('active');
        if (current && link.getAttribute('href') && link.getAttribute('href').endsWith(current)) {
          link.classList.add('active');
        }
      });
    };

    window.addEventListener('scroll', updateActiveLink);
    updateActiveLink(); // Init on load
  }

  // Initialize scroll-triggered animations
  function initScrollAnimations() {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        } else {
          // Only reset the animation if it goes off the BOTTOM of the screen.
          // This prevents the layout-thrashing "seizure" at the top of the screen!
          if (entry.boundingClientRect.top > 0) {
            entry.target.classList.remove('visible');
          }
        }
      });
    }, {
      root: null,
      rootMargin: '0px',
      threshold: 0.15
    });

    document.querySelectorAll('.fade-up').forEach(el => {
      observer.observe(el);
    });
  }
  
  // Initialize 3D Tilt Effect on cards
  function initTiltEffect() {
    document.body.addEventListener('mousemove', (e) => {
      const card = e.target.closest('.product-card');
      if (!card) return;
      
      card.classList.add('is-tilting');
      
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;
      
      const tiltX = ((y - centerY) / centerY) * -8; // Max 8 degrees
      const tiltY = ((x - centerX) / centerX) * 8;
      
      card.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale3d(1.02, 1.02, 1.02)`;
    });
    
    document.body.addEventListener('mouseout', (e) => {
      const card = e.target.closest('.product-card');
      if (!card) return;
      
      if (!card.contains(e.relatedTarget)) {
        card.classList.remove('is-tilting');
        card.style.transform = ''; 
      }
    });
  }
  
  initScrollAnimations();
  initTiltEffect();
});

