// Função para alternar o tema
toggleTheme = () => {
    const html = document.documentElement;
    const theme = html.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
    
    // Atualiza o atributo data-theme
    html.setAttribute('data-theme', theme);
    
    // Salva a preferência no localStorage
    localStorage.setItem('theme', theme);
    
    // Atualiza o texto do botão
    updateThemeButton(theme);
};

// Função para atualizar o ícone do botão
updateThemeButton = (theme) => {
    const themeToggle = document.getElementById('theme-toggle');
    if (themeToggle) {
        const sunIcon = themeToggle.querySelector('.sun');
        const moonIcon = themeToggle.querySelector('.moon');
        
        if (theme === 'dark') {
            sunIcon.style.display = 'inline';
            moonIcon.style.display = 'none';
            themeToggle.setAttribute('aria-label', 'Alternar para tema claro');
        } else {
            sunIcon.style.display = 'none';
            moonIcon.style.display = 'inline';
            themeToggle.setAttribute('aria-label', 'Alternar para tema escuro');
        }
    }
};

// Verifica o tema salvo ou a preferência do sistema
document.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme') || 
                      (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    
    // Aplica o tema salvo
    document.documentElement.setAttribute('data-theme', savedTheme);
    updateThemeButton(savedTheme);
    
    // Adiciona o botão de alternar tema ao header
    const headerNav = document.querySelector('header nav');
    if (headerNav) {
        const themeToggle = document.createElement('button');
        themeToggle.id = 'theme-toggle';
        themeToggle.className = 'theme-toggle';
        themeToggle.setAttribute('aria-label', 'Alternar tema');
        themeToggle.innerHTML = `
            <i class="moon">🌙</i>
            <i class="sun" style="display: none;">☀️</i>
        `;
        themeToggle.onclick = toggleTheme;
        
        // Insere o botão após o título do menu
        const headerTitle = document.querySelector('header nav h2');
        if (headerTitle) {
            headerTitle.after(themeToggle);
        } else {
            headerNav.prepend(themeToggle);
        }
    }
});
