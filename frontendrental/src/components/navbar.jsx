import React from "react";
import { Link } from "react-router-dom";

export default function Navbar() {
  return (
    <nav className="bg-white shadow-md px-8 py-4 flex justify-between items-center">
      <h1 className="text-xl font-bold text-blue-900">Corfu</h1>
      <ul className="flex space-x-6 text-gray-700">
        <li>
          <Link to="/" className="hover:text-blue-800">
            Home
          </Link>
        </li>
        <li>
          <Link to="/login" className="hover:text-blue-800">
            Login
          </Link>
        </li>
        <li>
          <Link to="/dashboard" className="hover:text-blue-800">
            Dashboard
          </Link>
        </li>
      </ul>
    </nav>
  );
}