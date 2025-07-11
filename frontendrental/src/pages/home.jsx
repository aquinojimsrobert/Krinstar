import React from "react";
import { useState } from "react";
import Navbar from "./components/Navbar";
const home = () => {
  return (
    <div className="min-h-screen bg-white font-sans">
      {/* Navbar */}
     <Navbar />

      {/* Hero Section */}
      <div
        className="relative bg-cover bg-center h-[80vh] flex items-center"
        style={{ backgroundImage: "url('/your-building-image.jpg')" }}
      >
        <div className="bg-black bg-opacity-50 w-full h-full absolute top-0 left-0"></div>
        <div className="relative z-10 px-10 max-w-xl text-white">
          <h2 className="text-4xl font-bold mb-4">
            Find a Room That Feels Like Home — With Everything in One Place.
          </h2>
          <p className="mb-6">Rent Easily, Pay Online, Report Issues — All in One.</p>
          <button className="px-6 py-2 bg-white text-blue-800 font-semibold rounded shadow">
            Login
          </button>
        </div>
      </div>

      {/* Info Cards */}
      <div className="grid grid-cols-1 md:grid-cols-4 gap-4 px-10 py-8 bg-gray-100">
        <div className="bg-white shadow-md rounded p-4">
          <h3 className="text-sm text-gray-500">Location</h3>
          <p className="font-semibold">Select Building / Area</p>
        </div>
        <div className="bg-white shadow-md rounded p-4">
          <h3 className="text-sm text-gray-500">Monthly Rate</h3>
          <p className="font-semibold">₱2,000–₱6,000</p>
        </div>
        <div className="bg-white shadow-md rounded p-4">
          <h3 className="text-sm text-gray-500">Availability</h3>
          <p className="font-semibold">Available Now / Choose Date</p>
        </div>
        <div className="bg-white shadow-md rounded p-4">
          <h3 className="text-sm text-gray-500">Facility Type</h3>
          <p className="font-semibold">Aircon, Private Bath, Shared Bath</p>
        </div>
      </div>
    </div>
  );
};

export default HomePage;
