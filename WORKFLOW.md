# GB/T 12406 货币代码模块 主要工作流程

```mermaid
flowchart TD
    A[调用 Currency 枚举] --> B{选择货币代码}
    B --> |通过常量| C[如 Currency::CNY]
    B --> |遍历所有| D[Currency::cases()]
    C --> E[获取标签 getLabel()]
    C --> F[转为数组 toItem()]
    D --> G[批量获取标签/数组]
    E --> H[用于显示、业务逻辑]
    F --> H
    G --> H
```

## 说明

- 用户通过 PHP 8.1+ 枚举直接获取货币代码常量。
- 可通过 `getLabel()` 获取货币中文/英文名称。
- 可通过 `toItem()` 转为数组，便于前端展示。
- 支持遍历所有货币代码，适合下拉列表等场景。
