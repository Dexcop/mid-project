<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CategoryPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Assuming all users can view categories
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Category $category): bool
    {
        // Logic to determine if the user can view the category
        // For example, you might check if the category is public or if the user has specific permissions
        return true; // or return $user->canViewCategory($category);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Logic to determine if the user can create categories
        // For example, you might check if the user is an admin or has specific permissions
        return $user->isAdmin(); // Example assuming isAdmin() method exists on the User model
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Category $category): bool
    {
        // Logic to determine if the user can update the category
        // For example, you might check if the user is the owner of the category or has specific permissions
        return $user->id === $category->user_id; // Example assuming user_id is the owner of the category
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Category $category): bool
    {
        // Logic to determine if the user can delete the category
        // For example, you might check if the user is the owner of the category or has specific permissions
        return $user->id === $category->user_id; // Example assuming user_id is the owner of the category
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Category $category): bool
    {
        // Logic to determine if the user can restore the category
        // For example, you might check if the user is an admin or has specific permissions
        return $user->isAdmin(); // Example assuming isAdmin() method exists on the User model
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Category $category): bool
    {
        // Logic to determine if the user can permanently delete the category
        // For example, you might check if the user is an admin or has specific permissions
        return $user->isAdmin(); // Example assuming isAdmin() method exists on the User model
    }
}
