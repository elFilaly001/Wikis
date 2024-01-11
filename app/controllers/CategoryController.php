<?php

namespace App\controllers;

use App\models\CategoryModel;

class CategoryController
{
    public function createCategoryControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryName = $_POST["categoryName"] ?? '';
            if (!empty($categoryName)) {
                $categoryModel = new CategoryModel();
                return $categoryModel->addCategory($categoryName);
            }
        }
    }

    public function getCategoryControl()
    {
        $categoryModel = new CategoryModel();
        $results = $categoryModel->getCategories();
        foreach ($results as $result) {
            echo " <option value='{$result['cat_id']}'>{$result['cat_name']}</option>";
        }
    }

    public function updateCategoryControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryId = $_POST["categoryId"] ?? '';
            $newCategoryName = $_POST["newCategoryName"] ?? '';
            if (!empty($categoryId) && !empty($newCategoryName)) {
                $categoryModel = new CategoryModel();
                return $categoryModel->updateCategory($categoryId, $newCategoryName);
            }
        }
    }

    public function deleteCategoryControl()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $categoryId = $_POST["categoryId"] ?? '';
            if (!empty($categoryId)) {
                $categoryModel = new CategoryModel();
                return $categoryModel->deleteCategory($categoryId);
            }
        }
    }

    public function countCate()
    {
        $count = new CategoryModel();
        $result = $count->countCate();
        echo $result;
    }
}
