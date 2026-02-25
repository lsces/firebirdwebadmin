import { test, expect } from '@playwright/test';

test('has title', async ({ page }) => {
  await page.goto('/');

  // Expect a title "to contain" a substring.
  await expect(page).toHaveTitle(/Firebird Web Admin \/ Database/);
});

test('login form is visible', async ({ page }) => {
    await page.goto('/');

    // Expect the login form to be visible
    await expect(page.locator('form[action="database.php"]')).toBeVisible();
    await expect(page.getByLabel('Username')).toBeVisible();
    await expect(page.getByLabel('Password')).toBeVisible();
    await expect(page.getByRole('button', { name: 'Login' })).toBeVisible();
});
